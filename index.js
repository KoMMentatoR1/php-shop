document.addEventListener('DOMContentLoaded', () => {
    let dropdownMenu = document.querySelector('.dropdown_menu');
    let dropdown = document.querySelector('.dropdown')
    
    dropdownMenu.addEventListener('click', function() {
        dropdownMenu.classList.toggle('active')
        dropdown.classList.toggle('close')
    });
});
