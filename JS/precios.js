//////////////////////////////////
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

////////////////////////////////////////
let index = 0;

function mostrarSlide(n) {
    const slides = document.querySelectorAll('.carrusel-contenedor .producto');
    if (n >= slides.length) {
        index = 0;
    } else if (n < 0) {
        index = slides.length - 1;
    } else {
        index = n;
    }
    const offset = -index * (100 / slides.length);
    document.querySelector('.carrusel-contenedor').style.transform = `translateX(${offset}%)`;
}

function cambiarSlide(n) {
    mostrarSlide(index + n);
}

mostrarSlide(index);

setInterval(() => {
    cambiarSlide(1);  // Avanza automáticamente cada 3 segundos
}, 3000);

