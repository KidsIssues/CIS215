//AJAX INPUT -- Email validator 
document.addEventListener("DOMContentLoaded", () => {
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

        fetch("project1sol.php", { method: "POST", body: "email=" + encodeURIComponent(email) })
          .then(response => response.text())
          .then(data => {
            emailMsg.textContent = "Email is valid: " + email;

        });
    });
});