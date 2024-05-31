document.addEventListener("DOMContentLoaded", function(){
    const signUp = {
        IdUser: "",
        firstName: "",
        lastName: "",
        password: "",
        phoneNumber: "",
        Address: "",
        email: ""
    };
    const idUser = document.querySelector("#IdUser");
    const inputFirstName = document.querySelector("#firstName");
    const inputLastName = document.querySelector("#lastName");
    const inputPassword = document.querySelector("#password");
    const inputPhoneNumber = document.querySelector("#phoneNumber");
    const inputAddress = document.querySelector("#Address");
    const inputEmail = document.querySelector("#email");
    const form = document.querySelector("#form");
    const btnSubmit = document.querySelector('#form button[type="submit"]');
    const spinner = document.querySelector("#spinner");

    //validating password
let letter = document.getElementById("letter");
let capital = document.getElementById("capital");
let number = document.getElementById("number");
let length = document.getElementById("length");

// When the user clicks on the password field, show the message box
inputPassword.onfocus = function() {
    document.getElementById("message").style.display = "block";
  }
  
  // When the user clicks outside of the password field, hide the message box
  inputPassword.onblur = function() {
    document.getElementById("message").style.display = "none";
  }
  
  // When the user starts to type something inside the password field
  inputPassword.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(inputPassword.value.match(lowerCaseLetters)) {
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
  }
  
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(inputPassword.value.match(upperCaseLetters)) {
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
  
    // Validate numbers
    var numbers = /[0-9]/g;
    if(inputPassword.value.match(numbers)) {
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
  
    // Validate length
    if(inputPassword.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }

    idUser.addEventListener("blur", check);
    inputEmail.addEventListener("blur", check);
    inputPhoneNumber.addEventListener("blur", check);
    inputFirstName.addEventListener("blur", check);
    inputLastName.addEventListener("blur", check);
    inputPassword.addEventListener("blur", check);
    inputAddress.addEventListener("blur", check);
    form.addEventListener("submit", sendInfo);

    function sendInfo(e){
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
            succesfulAlert.textContent = "You signed up successfully";
            form.appendChild(succesfulAlert);

            setTimeout(() => {
                succesfulAlert.remove();
            }, 3000);
        }, 3000);
    }

    function check(e){
        if(e.target.value.trim() === ""){
            showAlert( `This field ${e.target.value} is required`, e.target.parentElement);
            signUp[e.target.id] = "";
            checkInfo();
            validatePhone();
            return;
        }
        if(e.target.id === "email" && !validateEmail(e.target.value)){
            showAlert("This email is not valid", e.target.parentElement);
            signUp[e.target.id] = "";
            checkInfo();
            return;
        }
        if (e.target.id === "phoneNumber" && !validatePhone(e.target.value)) {
            showAlert("This phone number is not valid", e.target.parentElement);
            signUp[e.target.id] = "";
            checkInfo();
            return;
    }

    cleanAlert(e.target.parentElement);

    signUp[e.target.id] = e.target.value.trim().toLowerCase();
    checkInfo();

    }

    function showAlert(message, reference){
        cleanAlert(reference);

        const error = document.createElement("p");
        error.textContent = message;
        error.classList.add("text-bg-danger", "p-3");
        reference.appendChild(error);
    }

    function cleanAlert(reference){
        const alert = reference.querySelector(".text-bg-danger");

        if(alert){
            alert.remove();
        }
    }

    function validateEmail(email){
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

      function checkInfo() {
        if (Object.values(signUp).includes("")) {
            btnSubmit.classList.add("bg-opacity-25");
            btnSubmit.disabled = true; 
            console.log(signUp);
            return;
        }
        btnSubmit.classList.remove("bg-opacity-25");
        btnSubmit.disabled = false;
    }
});

//PHP register-------------------------------------------------------------------------
document.getElementById("form").addEventListener("submit", async function (event) {
  event.preventDefault();
  const form = event.target;
  
  // ... código para mostrar un spinner o mensaje de carga ...

  const formData = new FormData(form);
  const response = await fetch(form.action, {
      method: form.method,
      body: formData
  });

  if (response.ok) {
      // El registro fue exitoso, puedes redirigir al usuario o mostrar un mensaje de éxito
      console.log("Registro exitoso");
  } else {
      // El registro falló, puedes mostrar un mensaje de error
      console.error("Error en el registro");
  }

  // ... código para ocultar el spinner o mensaje de carga ...
});
