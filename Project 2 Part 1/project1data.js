document.addEventListener("DOMContentLoaded", deleteEmailData);


//Delete email data
function deleteEmailData() {
        const deleteForm = document.querySelector("#delete-Form");

        deleteForm.addEventListener('submit', (event) => {
            event.preventDefault();


            const emailInput = document.querySelector("#delete-email-id");
            const email = emailInput.value.trim();
            const emailMsg = document.getElementById("ConfirmationMessage");


            fetch ("deleteInfo.php", { method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "delete-email-name=" + encodeURIComponent(email) })

                .then(response => response.text())
                .then(data => {
                    if (data.trim() === "Deleted") {
                        emailMsg.textContent = "We deleted the email, and information with it!" + email;
                        } else if (data.trim() === "notFound") {
                            emailMsg.textContent = "We couldn't find the email you gave us."
                        } else if (data.trim() === "Invalid") {
                            emailMsg.textContent = "invalid email";
                        }
                        
                });
        });
    };
    


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

