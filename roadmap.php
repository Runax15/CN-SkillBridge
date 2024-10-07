<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./roadmap.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    />
  </head>
  <body>
    <!-- <div class="roadmap5">
      <header class="header">
        <h1 class="course-roadmap-generator">
          <p class="course-roadmap2">Course Roadmap</p>
          <p class="generator">Generator</p>
        </h1>
        <div class="frame11">
          <input class="input-field1" placeholder="Enter Field" type="text" />

          <button class="button11">
            <div class="roadmap6">Generate Course Roadmap</div>
          </button>
        </div> -->
      </header>
      <!-- <main class="body1">
      
      </main> -->
      <?php include 'navbar.php'; ?>
      <div class="container">
        <div class="tabs">
            <button class="tablinks active" onclick="openTab(event, 'AllRoadmaps')">All Roadmaps</button>
            <button class="tablinks" onclick="openTab(event, 'WebDevelopment')">Web Development</button>
            <button class="tablinks" onclick="openTab(event, 'Frameworks')">Frameworks</button>
            <button class="tablinks" onclick="openTab(event, 'Languages')">Languages</button>
            <button class="tablinks" onclick="openTab(event, 'DevOps')">DevOps</button>
            <button class="tablinks" onclick="openTab(event, 'Mobile')">Mobile Development</button>
            <button class="tablinks" onclick="openTab(event, 'Database')">Database</button>
            <button class="tablinks" onclick="openTab(event, 'CS')">Computer Science</button>
            <button class="tablinks" onclick="openTab(event, 'ML')">Machine Learning</button>
            <button class="tablinks" onclick="openTab(event, 'Game')">Game Development</button>
            <button class="tablinks" onclick="openTab(event, 'Design')">Design</button>
            <button class="tablinks" onclick="openTab(event, 'Blockchain')">Blockchain</button>
            <button class="tablinks" onclick="openTab(event, 'Cyber')">Cyber Security</button>
            <!-- Add the rest of the tab buttons here -->
        </div>

        <div id="AllRoadmaps" class="tabcontent active">
          <h3>ROLE BASED ROADMAPS</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=frontend'">Frontend</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=backend'">Backend</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=full-stack'">Full Stack</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=api-design'">API Design</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=devops'">DevOps</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=android'">Android</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=ios'">iOS</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=postgresql'">PostgreSQL</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=machine-learning'">Machine Learning</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=ai-data-science'">AI and Data Science</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=data-analyst'">Data Analyst</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=ux-design'">UX Design</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=blockchain'">Blockchain</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=client-side-game-dev'">Client Side Game Dev</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=server-side-game-dev'">Server Side Game Dev</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=cyber-security'">Cyber Security</button>
          
          <h3>SKILL BASED ROADMAPS</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=graphql'">GraphQL</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=git-github'">Git and GitHub</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=react'">React</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=vue'">Vue</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=angular'">Angular</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=spring-boot'">Spring Boot</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=asp-net-core'">ASP.NET Core</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=javascript'">JavaScript</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=typescript'">TypeScript</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=node-js'">Node.js</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=go'">Go</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=rust'">Rust</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=python'">Python</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=java'">Java</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=sql'">SQL</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=docker'">Docker</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=kubernetes'">Kubernetes</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=aws'">AWS</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=linux'">Linux</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=react-native'">React Native</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=flutter'">Flutter</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=mongodb'">MongoDB</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=computer-science'">Computer Science</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=data-structures'">Data Structures</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=system-design'">System Design</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=design-architecture'">Design and Architecture</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=prompt-engineering'">Prompt Engineering</button>          
            <!-- Add more items for skill-based roadmaps -->
        </div>

        <div id="WebDevelopment" class="tabcontent">
          <h3>WEB DEVELOPMENT</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=frontend'">Frontend</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=backend'">Backend</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=full-stack'">Full Stack</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=api-design'">API Design</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=git-github'">Git and GitHub</button>
      </div>
      
      <div id="Frameworks" class="tabcontent">
          <h3>FRAMEWORKS</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=react'">React</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=vue'">Vue</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=angular'">Angular</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=spring-boot'">Spring Boot</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=asp-net-core'">ASP.NET Core</button>
      </div>
      
      <div id="Languages" class="tabcontent">
          <h3>LANGUAGES</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=javascript'">JavaScript</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=typescript'">TypeScript</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=node-js'">Node.js</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=go'">Go</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=rust'">Rust</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=python'">Python</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=java'">Java</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=sql'">SQL</button>
      </div>
      
      <div id="DevOps" class="tabcontent">
          <h3>DEVOPS</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=devops'">DevOps</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=docker'">Docker</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=kubernetes'">Kubernetes</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=aws'">AWS</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=linux'">Linux</button>
      </div>
      
      <div id="Mobile" class="tabcontent">
          <h3>MOBILE DEVELOPMENT</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=android'">Android</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=ios'">iOS</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=react-native'">React Native</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=flutter'">Flutter</button>
          <h3>LANGUAGES</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=javascript'">JavaScript</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=typescript'">TypeScript</button>
      </div>
      
      <div id="Database" class="tabcontent">
          <h3>DATABASES</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=postgresql'">PostgreSQL</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=mongodb'">MongoDB</button>
          <h3>LANGUAGES</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=sql'">SQL</button>
      </div>
      
      <div id="CS" class="tabcontent">
          <h3>COMPUTER SCIENCE</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=computer-science'">Computer Science</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=data-structures'">Data Structures</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=system-design'">System Design</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=design-architecture'">Design and Architecture</button>
      </div>
      
      <div id="ML" class="tabcontent">
          <h3>MACHINE LEARNING</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=machine-learning'">Machine Learning</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=ai-data-science'">AI and Data Science</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=data-analyst'">Data Analyst</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=prompt-engineering'">Prompt Engineering</button>
      </div>
      
      <div id="Game" class="tabcontent">
          <h3>GAME DEVELOPMENT</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=client-side-game-dev'">Client Side Game Dev</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=server-side-game-dev'">Server Side Game Dev</button>
      </div>
      
      <div id="Design" class="tabcontent">
          <h3>DESIGN</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=ux-design'">UX Design</button>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=system-design'">System Design</button>
      </div>
      
      <div id="Blockchain" class="tabcontent">
          <h3>BLOCKCHAIN</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=blockchain'">Blockchain</button>
      </div>
      
      <div id="Cyber" class="tabcontent">
          <h3>CYBER SECURITY</h3>
          <button class="item" onclick="window.location.href='roadmap-selector.html?roadmap=cyber-security'">Cyber Security</button>
      </div>      
        <!-- Continue to add other tab contents -->
    </div>
     <?php include 'foot.php';?>
      
    </div>

    <script>
      function openTab(evt, tabName) {
            var tabcontent = document.getElementsByClassName("tabcontent");
            for (var i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            var tablinks = document.getElementsByClassName("tablinks");
            for (var i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector(".tablinks.active").click();
        });
        
    </script>
  </body>
</html>
