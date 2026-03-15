
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.bg-background-nav');
    if (window.scrollY > 50) { 
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
