// Inicializar Owl Carousel en el contenedor de productos relacionados
$(".producto-relacionado-container").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    },    
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true
});
