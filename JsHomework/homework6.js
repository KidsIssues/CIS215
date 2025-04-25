    //EVENT BUTTON -- background color changer
document.addEventListener("DOMContentLoaded", () => {
    const colorInput = document.getElementById("body");

    colorInput.addEventListener("input", function () {
      document.body.style.backgroundColor = this.value;
    });
  });



    //EVENT SELECTION -- when radio button selected, chagne color of the text on the button
    document.addEventListener('DOMContentLoaded', () => {
      const radioButtons = document.querySelectorAll('input[name="animal"]');

      radioButtons.forEach(radio => {
        radio.addEventListener('change', () => {

          document.querySelectorAll('label[for]').forEach(function (label) {
            label.style.color = 'black';
          });

          const SelectedButton = document.querySelector('label[for="' + radio.id + '"]');
          if    (SelectedButton) {
            SelectedButton.style.color = 'green';
          };
          });
        });
      });



      //EVENT INPUT -- list how many remaining characters you can use in text box
      document.addEventListener('DOMContentLoaded', () => {
        const emailInput = document.getElementById('email');
        const emailLengthMsg = document.getElementById('email-length');
        const maxLength = 254;

        emailInput.addEventListener('input', () => {
          var remaining = maxLength - emailInput.value.length;
          emailLengthMsg.textContent = "Did you know your email can only be " + remaining + " more characters long?"
        });
      });

      //AJAX INPUT -- Email validator 
      document.addEventListener("DOMContentLoaded", () => {
      const emailInput = document.getElementById("email");
      const emailMsg = document.getElementById("email-msg");

      emailInput.addEventListener("blur", function () {
          const email = emailInput.value;

          const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

          if (!regex) {
              emailMsg.textContent = "invalid email"
              emailMsg.className = "text-info"
              return;
          }
    
          fetch("homework6.php", { method: "POST", body: "email=" + encodeURIComponent(email) })
          .then(response => response.text())
          .then(data => {
            emailMsg.textContent = "Email is valid: " + email;
          })
          });
        });



            //function for below
            function validatePassword(password) {
              upperCheck = /[A-Z]/.test(password);
              lowerCheck = /[a-z]/.test(password);
              numberCheck = /\d/.test(password);
              lengthCheck = password.length >= 8;
              return upperCheck && lowerCheck && numberCheck && lengthCheck;
            }
          //AJAX INPUT -- password validator
          document.addEventListener("DOMContentLoaded", () => {
          const passwordInput = document.getElementById('pw-id');
          const passwordOutput = document.getElementById('password-msg');

          passwordInput.addEventListener("blur", function () {
                const password = passwordInput.value;
          
          if (!validatePassword(password)) {
            passwordOutput.textContent = "Invalid Password"
            return
          }

          fetch("homework6.php", { method: "POST", body: "password=" + encodeURIComponent(passwordInput) })
        .then(response => response.text())
        .then(data => {
          passwordOutput.textContent = "Password is Valid ";
        })
      });
    });



      //FormData SELECTION -- display num of times radio button clicked
      document.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('animalsForm');
      const showCount = document.getElementById('Radio-Clicked');

      let timesChanged = 0;
      let lastValue = null;

      const radioButton = form.querySelectorAll('input[name="animal"]');
        radioButton.forEach(radio => {
          radio.addEventListener('change', () => {
            const formData = new FormData(form);
            const currentValue = formData.get('animal');

            if (currentValue !== lastValue) {
              timesChanged++
              lastValue = currentValue;
              showCount.textContent = timesChanged;
            }
          });
        });
      });

