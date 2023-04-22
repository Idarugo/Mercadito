<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/blog.css">
    <title>Blog</title>
</head>

<body>
    <?php include '../components/header.php' ?>

    <header>
        <div class="header-container">
            <h1>Blog de audífonos y servicios para la audición</h1>
            <p class="intro">¡Bienvenidos a nuestro blog! Aquí encontrarás información interesante sobre los nuevos
                audífonos que ofrecemos en nuestra clínica de audiología, así como los servicios innovadores que brindamos
                para mejorar la audición de nuestros pacientes.</p>
        </div>
    </header>

    <div class="container">
        <div class="blog-posts">
            <div class="blog-post">
                <img src="../assets/images/blog-post-1.jpg" alt="Imagen del blog post 1">
                <h2>Descubre los nuevos audífonos de última generación</h2>
                <p class="date">Publicado el 10 de abril, 2023</p>
                <p class="excerpt">Te presentamos los audífonos más avanzados del mercado, con tecnología de vanguardia
                    que proporciona una calidad de sonido excepcional y un mayor confort. Conoce todas sus
                    características y beneficios.</p>
                <div class="read-more-container">
                    <a href="#" class="read-more">Leer más</a>
                </div>
                <div class="full-content" style="display: none;"> <!-- Contenido completo oculto inicialmente -->
                    <p style="margin-top: 10px;">Este es el contenido completo que se mostrará cuando se haga clic en "Leer más".</p>
                    <p>Puedes agregar más elementos HTML y estilos CSS según sea necesario.</p>
                </div>
            </div>
            <div class="blog-post">
                <img src="../assets/images/blog-post-2.jpg" alt="Imagen del blog post 2">
                <h2>Nuevos servicios para el cuidado de la audición</h2>
                <p class="date">Publicado el 8 de abril, 2023</p>
                <p class="excerpt">Estamos orgullosos de ofrecer nuevos servicios especializados para el cuidado de la
                    audición, incluyendo evaluaciones de audición completas, terapias auditivas personalizadas y
                    asesoramiento profesional. Descubre cómo podemos ayudarte a mejorar tu audición y tu calidad de
                    vida.</p>
                <div class="read-more-container">
                    <a href="#" class="read-more">Leer más</a>
                </div>
                <div class="full-content" style="display: none;"> <!-- Contenido completo oculto inicialmente -->
                    <p style="margin-top: 10px;">Este es el contenido completo que se mostrará cuando se haga clic en "Leer más".</p>
                    <p>Puedes agregar más elementos HTML y estilos CSS según sea necesario.</p>
                </div>
            </div>
        </div>
    </div>


    <?php include '../components/footer.php' ?>
    <script src="../assets/js/blog.js"></script>
</body>

</html>