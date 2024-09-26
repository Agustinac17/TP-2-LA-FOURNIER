document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    const form = document.getElementById('miFormulario');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault(); 

        const nombre = document.getElementById('nombre').value.trim();
        const email = document.getElementById('email').value.trim();
        let errorMessage = '';

        if (nombre === '') {
            errorMessage += 'El nombre es obligatorio wachin ES TU NOMBRE\n';
        }

        if (email === '') {
            errorMessage += 'El email es obligatorio.\n';
        } else if (!validateEmail(email)) {
            errorMessage += 'El email no es válido.\n';
        }

        if (errorMessage) {
            alert('Errores en el formulario:\n' + errorMessage);
            return; 
        }

        alert('Formulario enviado con éxito!');
        form.reset(); 
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
        return re.test(email); 
    }
});
