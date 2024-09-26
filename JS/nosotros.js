const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

///////////////////////////////////////////////
const images = document.querySelectorAll('.galeria-img');

images.forEach((image) => {
    image.addEventListener('click', () => {
        const currentSrc = image.getAttribute('src');
        const fileName = currentSrc.substring(currentSrc.lastIndexOf('/') + 1);
        
        let newFileName;
        if (fileName.includes('_alt')) {
            newFileName = fileName.replace('_alt', '');
        } else {
            const extensionIndex = fileName.lastIndexOf('.');
            newFileName = fileName.slice(0, extensionIndex) + '_alt' + fileName.slice(extensionIndex);
        }

        const newSrc = currentSrc.replace(fileName, newFileName);

        image.setAttribute('src', newSrc);
    });
});
