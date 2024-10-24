
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});


$(document).ready(function(){
    $('.productos_slider').slick({
        infinite: true,          // Habilita el bucle infinito
        slidesToShow: 3,        // Número de productos a mostrar
        slidesToScroll: 1,      // Número de productos a desplazar
        arrows: true,           // Muestra las flechas
        dots: true,             // Muestra los puntos de paginación
        autoplay: true,         // Activa la reproducción automática
        autoplaySpeed: 2000,    // Tiempo entre cambios
    });
});

document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#event-date", {
        dateFormat: "Y-m-d", // Formato de la fecha
        minDate: "today", // No permitir fechas pasadas
    });
});