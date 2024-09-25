window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('bg-white', 'shadow-md');
    } else {
        navbar.classList.remove('bg-white', 'shadow-md');
    }
});

// Menu Mobile Toggle
const menuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

menuButton.addEventListener('click', function () {
    mobileMenu.classList.toggle('hidden');
});
