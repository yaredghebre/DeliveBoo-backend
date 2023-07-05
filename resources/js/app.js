import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// Modal message for delete product

const deleteBtns = document.querySelectorAll(".btn-delete");

if (deleteBtns.length > 0) {
    deleteBtns.forEach((btn) => {
        btn.addEventListener("click", function (event) {
            event.preventDefault();
            const productName = btn.getAttribute("data-product-name");

            const deleteModal = new bootstrap.Modal(document.getElementById("delete-modal"));

            document.getElementById("product-name").innerText = productName;
            document.getElementById("action-delete").addEventListener("click", function () {
                btn.parentElement.submit();
            });
            deleteModal.show();

        });
    });
}

// setTime out for messages
const messageBanner = document.querySelectorAll(".ms_alert_handle");

if (messageBanner.length > 0) {
    messageBanner.forEach((msgBanner) => {
        setTimeout(function () {
            msgBanner.style.display = "none";
        }, 3000);
    });
}

// Preview Immagine in edit
const imageInput = document.getElementById("image-input");
const imagePreview = document.getElementById("image-preview");
const currentImage = document.getElementById("current-image");

if (imageInput && imagePreview) {
    imageInput.addEventListener("change", function() {
        const selectedFile = this.files[0];

        const reader = new FileReader();
        reader.addEventListener("load", function() {
            imagePreview.src = reader.result;
            console.log(imagePreview);
            
            if (currentImage) {
                currentImage.classList.add("d-none");
            }
            imagePreview.classList.remove("d-none");

        });

        reader.readAsDataURL(selectedFile);
    });
}
// Password Check

const password = document.getElementById("password");
const passwordConfirm = document.getElementById("password-confirm");
const btnRegister = document.getElementById("btn-register");

// btnRegister.addEventListener("click", function(event) {
//    passwordConfirm.classList.remove("is-invalid");
//     if(password.value !== passwordConfirm.value) {
//         event.preventDefault();
//         passwordConfirm.classList.add("is-invalid");
//         }
//     });


// checkbox required
const checks = document.querySelectorAll(".checkTypes");
for (let i = 0; i < checks.length; i++) {
  checks[i].addEventListener("click", function() {
    for (var k = 0; k < checks.length; k++) {
        checks[k].removeAttribute("required");
      }
    
  });
}