document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('restaurant-form');
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    console.log(button, checkboxes);
    button.addEventListener('click', function (event) {
        let checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
        if (!checkedOne) {
            event.preventDefault();
            alert('Seleziona almeno una tecnologia.');
        }
    });
});