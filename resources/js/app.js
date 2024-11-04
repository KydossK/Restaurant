import './bootstrap';

function updateBodyClass() {
    const width = window.innerWidth;
    const body = document.body;

    // Retirer toutes les classes spécifiques
    body.classList.remove('small-screen', 'mobile-screen', 'tablet-portrait', 'tablet-landscape', 'laptop');

    // Ajouter la classe appropriée en fonction de la largeur de la fenêtre
    if (width <= 480) {
        body.classList.add('mobile-screen');
    } else if (width <= 768) {
        body.classList.add('tablet-portrait');
    } else if (width <= 1280) {
        body.classList.add('laptop');
    }
}

// Appeler la fonction au chargement et lors du redimensionnement de la fenêtre
window.addEventListener('load', updateBodyClass);
window.addEventListener('resize', updateBodyClass);