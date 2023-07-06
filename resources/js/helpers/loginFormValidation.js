const email = document.getElementById('email');
const password = document.getElementById('password');
const errorEmail = document.createElement('span');
const errorPassword = document.createElement('span');
errorEmail.classList.add('invalid-feedback');
errorPassword.classList.add('invalid-feedback')

//messaggi di errore x email
const emailErrorType=[
    "La email deve contere una '@'",
    "La email deve contenere un prefisso '.com , .it'",
    "Inserisci un email valida"
]
//messaggi di erroe per password
const passwordErrorType = ['La password deve contenere almeno 8 caratteri']

//check email
email.addEventListener("keyup",()=>{
    email.classList.remove('is-invalid')
    errorEmail.innerText=" "
    setTimeout(emailError,1500)
})
//check password
password.addEventListener("keyup",()=>{
    password.classList.remove('is-invalid')
    errorPassword.innerText=" "
    setTimeout(passwordError,1500)
})



//funzioni
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

//passord function check

function passwordError(){
    if(password.value.length <=7){
        errorPassword.innerText = `${passwordErrorType[0]}`
        password.classList.add('is-invalid')
        password.after(errorPassword)
    }
}



