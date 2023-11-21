document.addEventListener("DOMContentLoaded", function () {
    const email = {
        firstName: "",
        lastName: "",
        date: "",
        phoneNumber: "",
        email: ""
    };

    const inputFirstName = document.querySelector("#firstName");
    const inputLastName = document.querySelector("#lastName");
    const inputAgeUser = document.querySelector("#date");
    const inputPhoneNumber = document.querySelector("#phoneNumber");
    const inputEmail = document.querySelector("#email");
    const form = document.querySelector("#form");
    const btnSubmit = document.querySelector('#form button[type="submit"]');
    const spinner = document.querySelector("#spinner");

    inputEmail.addEventListener("blur", check);
    inputPhoneNumber.addEventListener("blur", check);
    inputFirstName.addEventListener("blur", check);
    inputLastName.addEventListener("blur", check);
    inputAgeUser.addEventListener("blur", check);
    form.addEventListener("submit", sendEmail); 

    function sendEmail(e) {
        e.preventDefault();
        spinner.classList.add("flex");
        spinner.classList.remove("hidden");

        setTimeout(() => {
            spinner.classList.remove("flex");
            spinner.classList.add("hidden");

            // Crear alerta de envío
            const succesfulAlert = document.createElement("p");
            succesfulAlert.classList.add(
                "text-bg-success",
                "p-3",
                "text-center",
                "text-uppercase",
                "uppercase"
            );
            succesfulAlert.textContent = "Your info was sent";
            form.appendChild(succesfulAlert);

            setTimeout(() => {
                succesfulAlert.remove();
            }, 3000);
        }, 3000);
    }
    

    function check(e) {
        if(e.target.value.trim() === ""){
            showAlert(
                `This filed ${e.target.id} is mandatory`,
                e.target.parentElement
            );
            email[e.target.id] = "";
            checkEmail();
            validatePhone();
            return;
        }
        if (e.target.id === "email" && !validateEmail(e.target.value)) {
            showAlert("This email is not valid", e.target.parentElement);
            email[e.target.id] = "";
            checkEmail();
            return;
        }
        if (e.target.id === "phoneNumber" && !validatePhone(e.target.value)) {
            showAlert("This phone number is not valid", e.target.parentElement);
            email[e.target.id] = "";
            checkEmail();
            return;
        }

        cleanAlert(e.target.parentElement);

        email[e.target.id] = e.target.value.trim().toLowerCase();

        checkEmail();
    }

    function showAlert(message, reference) {
        cleanAlert(reference);

        const error = document.createElement("p");
        error.textContent = message;
        error.classList.add("text-bg-danger", "p-3");
        reference.appendChild(error);
    }

    function cleanAlert(reference) {
        const alert = reference.querySelector(".text-bg-danger");

        if (alert) {
            alert.remove();
        }
    }

    function validateEmail(email) {
        const regex = /^\w+([.-_+]?\w+)@\w+([.-]?\w+)(\.\w{2,10})+$/;
        const result = regex.test(email);
        return result;
    }

    function validatePhone() {
        const cel = phoneNumber.value;
    
        for (i = 0; i < cel.length; i++) {
          const code = cel.charCodeAt(i);
          if (code < 48 || code > 57) {
            phoneNumber.value = "";
            return false;
          }
        }
        return true;
      }

    function checkEmail() {
        if (Object.values(email).includes("")) {
            btnSubmit.classList.add("bg-opacity-25");
            btnSubmit.disabled = true; 
            console.log(email);
            return;
        }
        btnSubmit.classList.remove("bg-opacity-25");
        btnSubmit.disabled = false;
    }
});
