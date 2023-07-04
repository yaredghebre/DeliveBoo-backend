import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// Modal

const deleteBtns = document.querySelectorAll(".btn-delete");

if (deleteBtns.length > 0) {
    deleteBtns.forEach((btn) => {
        btn.addEventListener("click", function(event) {
            event.preventDefault();
            const productName = btn.getAttribute("data-product-name");

            const deleteModal = new bootstrap.Modal(document.getElementById("delete-modal"));

            document.getElementById("product-name").innerText = productName;
            document.getElementById("action-delete").addEventListener("click", function() {
                btn.parentElement.submit();
            });
            deleteModal.show();

        });
    });
}

const messageBanner = document.querySelectorAll(".ms_alert_handle");

if (messageBanner.length > 0) {
    messageBanner.forEach((msgBanner) => {
        setTimeout(function() {
            msgBanner.style.display = "none";
        }, 3000);
    });
}

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


