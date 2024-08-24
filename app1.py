# source /Users/apple/.local/pipx/venvs/streamlit/bin/activate
# python -u "/Users/apple/Documents/Projects/Roadmap-Generator-With-Gemini-pro/app1.py"
# streamlit run /Users/apple/Documents/Projects/Roadmap-Generator-With-Gemini-pro/app1.py

import streamlit as st
import os
import google.generativeai as genai
from dotenv import load_dotenv
import graphviz
import tempfile
import json

# Load environment variables
load_dotenv()

# Configure the API key
genai.configure(api_key=os.getenv("GOOGLE_API_KEY"))

def generate_course_structure(field_of_study):
    prompt = f'''You are an expert in {field_of_study}. Please provide a detailed course roadmap that includes all the important topics and subtopics necessary to master the field. 
    The format should be a dictionary where each key is a main topic and its value is a list of subtopics, which further contain prerequisites. 
    The structure should cover the entire learning journey from beginner to advanced level. 
    Example:
    {{
        "Programming Foundations": {{
            "topics": ["Variables", "Control Flow", "Functions"],
            "prerequisites": []
        }},
        "Data Structures": {{
            "topics": ["Arrays", "Linked Lists", "Stacks", "Queues"],
            "prerequisites": ["Programming Foundations"]
        }},
        "Machine Learning": {{
            "topics": ["Supervised Learning", "Unsupervised Learning", "Neural Networks"],
            "prerequisites": ["Data Structures", "Algorithms"]
        }}
    }}
    Please provide the roadmap for {field_of_study}.'''

    # Generate content using Gemini model
    model = genai.GenerativeModel('gemini-pro')
    response = model.generate_content(prompt)
    
    # Clean and parse the response
    try:
        cleaned_response = response.text.strip("```").strip()
        course_structure = json.loads(cleaned_response)
    except json.JSONDecodeError as e:
        st.error(f"Error parsing course structure: {e}")
        return None
    
    return course_structure

def generate_course_roadmap(course_structure):
    dot = graphviz.Digraph(format='svg', graph_attr={'bgcolor': '#edf1f2'},  # Background color
                           node_attr={'style': 'filled', 'fontname': 'Arial', 'fontsize': '14',
                                      'shape': 'rect', 'gradientangle': '90',
                                      'penwidth': '2', 'margin': '0.25',
                                      'fixedsize': 'false'},
                           edge_attr={'color': '#19be9d', 'arrowhead': 'open', 'penwidth': '2'})

    for main_topic, details in course_structure.items():
        label = f"{main_topic}\nTopics: {', '.join(details['topics'])}"
        fillcolor = '#2b3d50'  # Primary color for main topics
        fontcolor = '#edf1f2'  # Light color for text on dark background
        
        dot.node(main_topic, shape='rect', style='filled', fillcolor=fillcolor, fontcolor=fontcolor, label=label)

        for prereq in details.get('prerequisites', []):
            fillcolor_prereq = '#19be9d'  # Secondary color for prerequisites
            fontcolor_prereq = '#2b3d50'  # Dark color for text on lighter background
            
            dot.node(prereq, shape='rect', style='filled', fillcolor=fillcolor_prereq, fontcolor=fontcolor_prereq, label=prereq)
            dot.edge(prereq, main_topic, color='#666666', style='solid')

    # Save the SVG file
    svg_content = dot.pipe().decode('utf-8')
    with tempfile.NamedTemporaryFile(delete=False, suffix=".svg") as f:
        f.write(svg_content.encode("utf-8"))
        svg_path = f.name

    return svg_path

st.title("Computer Science Course Roadmap Generator")

field_of_study = st.text_input("Enter Field of Study", "")

if st.button("Generate Course Roadmap"):
    if field_of_study:
        course_structure = generate_course_structure(field_of_study)
        if course_structure:
            svg_path = generate_course_roadmap(course_structure)
            st.image(svg_path)
    else:
        st.error("Please enter a field of study.")
