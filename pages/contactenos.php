<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/contactenos.css">
    <title>Contactenos</title>
</head>

<body>
    <?php include '../components/header.php' ?>

    <div class="contact-container">
        <div class="contact-form">
            <h2>Contáctenos</h2>
            <form action="submit-form.php" method="POST">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="contact-location">
            <h2>Ubicación</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3301.171016590918!2d-70.74773037134428!3d-34.167545018442816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966343bd1328e1e1%3A0x78978ea9b84002e6!2sCENTRO%20AUDIOLOGICO%20RANCAGUA!5e0!3m2!1ses!2scl!4v1681070330160!5m2!1ses!2scl" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="contact-info">
                <div>
                    <h4>Atención Telefónica</h4>
                    <p>Lunes a Viernes de 8am a 5pm</p>
                    <p>Teléfono: 123-456-7890</p>
                </div>
                <div>
                    <h4>Horario de Atención</h4>
                    <p>Lunes a Viernes de 9am a 6pm</p>
                    <p>Sábado de 9am a 2pm</p>
                </div>
                <div>
                    <h4>Chat en Vivo</h4>
                    <p>Lunes a Viernes de 8am a 5pm</p>
                    <p>Chat en vivo disponible en la página de inicio</p>
                </div>
            </div>
        </div>
    </div>

    <?php include '../components/footer.php' ?>
</body>

</html>