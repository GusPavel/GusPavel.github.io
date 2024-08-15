
function Content(id) {
    // Oculta todos los contenidos
        const content = document.querySelectorAll('[id^="Content"]');
        content.forEach(content => {
            content.style.display = 'none';
    });
    // Muestra el contenido específico
        const Show = document.getElementById(id);
        Show.style.display = 'block';
}