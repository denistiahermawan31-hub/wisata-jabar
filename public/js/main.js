document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.style.background = "rgba(10, 46, 29, 0.95)";
            navbar.style.boxShadow = "0 10px 30px rgba(0,0,0,0.3)";
        } else {
            navbar.style.background = "rgba(10, 46, 29, 0.75)";
            navbar.style.boxShadow = "none";
        }
    });
