const form = document.querySelector("form");
const eField = form.querySelector(".email"),
      eInput = eField.querySelector("input"),
      pField = form.querySelector(".password"),
      pInput = pField.querySelector("input");

form.onsubmit = (e) => {
    e.preventDefault(); // Preventing from form submitting

    // If email and password are blank, add shake class in it; else call specified function
    if (eInput.value == "") {
        eField.classList.add("shake", "error");
    } else {
        checkEmail();
    }

    if (pInput.value == "") {
        pField.classList.add("shake", "error");
    } else {
        checkPass();
    }

    setTimeout(() => { // Remove shake class after 500ms
        eField.classList.remove("shake");
        pField.classList.remove("shake");
    }, 500);

    eInput.onkeyup = () => { checkEmail(); }; // Calling checkEmail function on email input keyup
    pInput.onkeyup = () => { checkPass(); }; // Calling checkPassword function on password input keyup

    function checkEmail() { // checkEmail function
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; // Pattern for validate email
        if (!eInput.value.match(pattern)) { // If pattern not matched then add error and remove valid class
            eField.classList.add("error");
            eField.classList.remove("valid");
            let errorTxt = eField.querySelector(".error-txt");
            // If email value is not empty then show please enter valid email else show Email can't be blank
            (eInput.value != "") ? errorTxt.innerText = "Enter a valid email address" : errorTxt.innerText = "Email can't be blank";
        } else { // If pattern matched then remove error and add valid class
            eField.classList.remove("error");
            eField.classList.add("valid");
        }
    }

    function checkPass() { // checkPass function
        if (pInput.value == "") { // If pass is empty then add error and remove valid class
            pField.classList.add("error");
            pField.classList.remove("valid");
        } else { // If pass is empty then remove error and add valid class
            pField.classList.remove("error");
            pField.classList.add("valid");
        }
    }

    // If eField and pField don't contain error class, that means user filled details properly
    if (!eField.classList.contains("error") && !pField.classList.contains("error")) {
        const formData = new FormData(form); // Create FormData object from the form

        fetch(form.getAttribute("action"), { // Use the form action to submit data
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert('You have successfully logged in!');
                window.location.href = "dashboard.php"; // Redirect to the dashboard or another page
            } else {
                alert(data.message); // Show the error message returned by the server
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.'); // Show a generic error message
        });
    }
}
