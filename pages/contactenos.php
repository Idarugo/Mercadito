<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/contactenos.css">
    <link rel="stylesheet" href="../assets/styles/components/forms.css">
</head>
<body>
<?php include '../components/header.php' ?>
    <div class="container">
        <p></p>
    </div>
    <section class="container-fluid banner">
        <div class="banner__img"></div>
        <h1>¡CONTÁCTANOS!</h1>
        <p>Escríbenos y en breve los pondremos en contacto contigo</p>
    </section>
    <form class="caja-formulario">
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Nombre completo">
        <label for="email">Correo Electronico</label>
        <input type="email" placeholder="ejemplo@email.com">
        <label for="mensaje">Mensaje</label>
        <textarea placeholder="Danos tu mensaje"></textarea>
        <input class="submit" name="submit" type="submit" value="Enviar">
    </form>
    <?php include '../components/footer.php' ?>
</body>
</html>
