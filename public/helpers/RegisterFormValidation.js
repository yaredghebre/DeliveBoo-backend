// Password Check

const password = document.getElementById("password");
const passwordConfirm = document.getElementById("password-confirm");
const btnRegister = document.getElementById("btn-register");

btnRegister.addEventListener("click", function(event) {
   passwordConfirm.classList.remove("is-invalid");
    if(password.value !== passwordConfirm.value) {
        event.preventDefault();
        passwordConfirm.classList.add("is-invalid");
        }
    });