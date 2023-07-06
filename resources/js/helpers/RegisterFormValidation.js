
//email + errors array
const email = document.getElementById('email');
const errorEmail = document.createElement('span');
errorEmail.classList.add('invalid-feedback');
const emailErrorType=[
    "La email deve contere una '@'",
    "La email deve contenere un prefisso '.com , .it'",
    "Inserisci un email valida"
]

//password + password array
const password = document.getElementById("password");
const errorPassword = document.createElement('span');
errorPassword.classList.add('invalid-feedback')
const passwordConfirm = document.getElementById("password-confirm");
const btnRegister = document.getElementById("btn-register");
const passwordErrorType = ['La password deve contenere almeno 8 caratteri']

//check password length
password.addEventListener("keyup",()=>{
    password.classList.remove('is-invalid')
    errorPassword.innerText=" "
    setTimeout(passwordError,1500)
})
// check password equality
btnRegister.addEventListener("click", function(event) {
   passwordConfirm.classList.remove("is-invalid");
    if(password.value !== passwordConfirm.value) {
        event.preventDefault();
        passwordConfirm.classList.add("is-invalid");
        }
    });

// check email
email.addEventListener("keyup",()=>{
    email.classList.remove('is-invalid')
    errorEmail.innerText=" "
    setTimeout(emailError,1500)
})
//functions------------------------------------------------------------------------
//email function check
function emailError(){
    console.log('si')
    if(!email.value.includes('@')){  
        errorEmail.innerText = `${emailErrorType[0]}`

    }else if(!email.value.includes('.com') && !email.value.includes('.it')){   
        errorEmail.innerText = `${emailErrorType[1]}`
    }else if(email.value.length <= 5){
        errorEmail.innerText = `${emailErrorType[2]}`
    }else{
        return;
    }
    email.classList.add('is-invalid')
    email.after(errorEmail)
}

//password length function
function passwordError(){
    if(password.value.length <=7){
        errorPassword.innerText = `${passwordErrorType[0]}`
        password.classList.add('is-invalid')
        password.after(errorPassword)
    }
}
