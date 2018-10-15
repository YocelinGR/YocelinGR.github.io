window.sr = ScrollReveal();
// Animations for the boxes into about me section
sr.reveal('.about-me-left', {
    duration: 2000,
    origin: 'left',
    distance: '300px'
});
sr.reveal('.about-me-center', {
    duration: 2000,
    origin: 'bottom',
    distance: '300px'
});
sr.reveal('.about-me-right', {
    duration: 2000,
    origin: 'right',
    distance: '300px'
});
/*Smooth scrolling effects */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
