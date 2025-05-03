document.addEventListener("DOMContentLoaded", () => {
    document.addEventListener("DOMContentLoaded", passValidate);
    document.addEventListener("DOMContentLoaded", emailValidate);
    document.addEventListener("DOMContentLoaded", deleteEmailData);
});

document.addEventListener("DOMContentLoaded", changeBackgroundColor);
document.addEventListener("DOMContentLoaded", changeTextColor);


//turning the pass validator into a function for easy use in the future
function passValidate() {
    const form = document.getElementById('password-form');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        
    const password = document.getElementById('pw-id').value;
    
    fetch ('livePasswordChecker.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded', },
        body: 'password=' + encodeURIComponent(password)
    })
    
    .then(response => response.json())
    .then(data => {
        if(data.status === 'success') {
            document.getElementById('password-section').hidden = true;
            document.getElementById('survey-form').hidden = false;
        }
    })
    });
}



//turning the email validator into a function for easy use in the future
function emailValidate() {
    const emailInput = document.getElementById("email-id");
    const emailMsg = document.getElementById("email-msg");

    emailInput.addEventListener("input", () => {
        const email = emailInput.value;

        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

        if (!regex) {
            emailMsg.textContent = "invalid email"
            emailMsg.className = "text-info"
            return;
        }

        fetch("liveEmailChecker.php", { method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "email-name=" + encodeURIComponent(email) })

        .then(response => response.text())
        .then(data => {
            if (data.trim() === "Only one entry per email.") {
            emailMsg.textContent = data;
            }
            emailMsg.textContent = "Email is valid: " + email;
        });
    });
}



//changes background color for all 3 pages
  function changeBackgroundColor() {
    const backgoundColorInput = document.getElementById("body");

    backgoundColorInput.addEventListener("input", (event) => {
        document.body.style.backgroundColor = event.target.value;
    });
  }

//changes text color for all 3 pages
function changeTextColor() {
    const colorInput = document.querySelector("#text-color");
        colorInput.addEventListener("input", (event) => {
            document.body.style.color = event.target.value;
            });
        }

//Delete email data
function deleteEmailData() {
    const deleteDataForm = document.getElementById("deleteDataForm");

        deleteDataForm.addEventListener("submit", (event) => {
            event.preventDefault();


            const emailInput = document.getElementById("delete-email-id");
            const email = emailInput.value.trim();
            const emailMsg = document.getElementById("ConfirmationMessage");

            fetch ("deleteinfo.php", { method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "email=" + encodeURIComponent(email) })

                .then(response => response.text())
                .then(data => {
                    if (data.trim() === "sorry, couldnt delete email.") {
                        emailMsg.textContent = "Couldn't delete email";
                        } else if (data.trim() === "invalid") {
                            emailMsg.textContent = "Invalid email address."
                        } else {
                            emailMsg.textContent = "email has been removed: " + email;
                            emailInput.value = "";
                        }
                        
                });
        });
    }
