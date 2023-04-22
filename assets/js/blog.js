document.addEventListener('DOMContentLoaded', function() {
    var readMoreLinks = document.getElementsByClassName('read-more');
    for (var i = 0; i < readMoreLinks.length; i++) {
        readMoreLinks[i].addEventListener('click', function(event) {
            // Evitar el comportamiento predeterminado del enlace
            event.preventDefault();
            // Obtener el elemento padre del enlace (el div .blog-post en este caso)
            var blogPost = this.closest('.blog-post');
            // Obtener el elemento con la clase .full-content dentro del blog post
            var fullContent = blogPost.querySelector('.full-content');
            
            // Verificar si el contenido completo está visible o no
            if (fullContent.style.display === 'block') {
                // Si está visible, ocultarlo
                fullContent.style.display = 'none';
                // Cambiar el texto del botón a "Leer más"
                this.textContent = 'Leer más';
            } else {
                // Si no está visible, mostrarlo
                fullContent.style.display = 'block';
                // Cambiar el texto del botón a "Cerrar"
                this.textContent = 'Cerrar';
            }
        });
    }
});
