document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    const overlay = document.querySelector('.overlay');

    const toggleMenu = () => {
        menuToggle.classList.toggle('active');
        navLinks.classList.toggle('active');
        overlay.classList.toggle('active');
    };

    menuToggle.addEventListener('click', toggleMenu);

    overlay.addEventListener('click', () => {
        menuToggle.classList.remove('active');
        navLinks.classList.remove('active');
        overlay.classList.remove('active');
    });

    navLinks.addEventListener('click', (e) => {
        if (e.target.tagName === 'A') {
            menuToggle.classList.remove('active');
            navLinks.classList.remove('active');
            overlay.classList.remove('active');
        }
    });
});