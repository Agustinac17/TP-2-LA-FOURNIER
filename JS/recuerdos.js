
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

const form = document.getElementById('upload-form');
const fileInput = document.getElementById('file-input');
const photoWall = document.getElementById('photo-wall');

form.addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que el formulario se envíe

    const file = fileInput.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.classList.add('uploaded-image'); // Agrega una clase para estilo
            photoWall.appendChild(img); // Agrega la imagen al muro
        };
        reader.readAsDataURL(file); // Lee el archivo como URL de datos
        fileInput.value = ''; // Limpia el input
    } else {
        alert('Por favor, selecciona un archivo para subir.');
    }
});
