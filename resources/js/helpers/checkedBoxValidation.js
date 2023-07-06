document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('restaurant-form');
    const msgError = document.getElementById('category-error');
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    button.addEventListener('click', function (event) {
        let checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
        msgError.classList.add('d-none');

        if (!checkedOne) {
            event.preventDefault();
            msgError.classList.remove('d-none');
        }
    });
});

// controllo su pIva
const iva = document.getElementById('iva');
const errorPiva = document.createElement('span');
errorPiva.classList.add('invalid-feedback');
const ivaError="inserisci solo numeri";


function requiredNumber(string){
    if(isNaN(string)){
        errorPiva.innerText = `${ivaError}`
        iva.classList.add('is-invalid')
        iva.after(errorPiva);    
    }else {
        iva.classList.remove('is-invalid')
        errorPiva.innerText = ""
    }
}
iva.addEventListener('keyup', function(){
    const value = iva.value;
    requiredNumber(value);
   
});

