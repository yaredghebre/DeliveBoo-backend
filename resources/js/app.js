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


// checkbox required
const checks = document.querySelectorAll(".checkTypes");
for (let i = 0; i < checks.length; i++) {
  checks[i].addEventListener("click", function() {
    for (var k = 0; k < checks.length; k++) {
        checks[k].removeAttribute("required");
      }
    
  });
}

// Function for click on visibility
document.addEventListener('DOMContentLoaded', function() {
    const imgBoxes = document.querySelectorAll('.ms_card-img-box');
    imgBoxes.forEach(function(box) {
      box.addEventListener('click', function() {
        const visible = box.getAttribute('data-visible');
        const image = box.getAttribute('data-image');
        box.classList.toggle('sepia');
        box.setAttribute('data-visible', visible === '1' ? '0' : '1');
        box.style.backgroundImage = `url(${image})`;
      });
    });
  });