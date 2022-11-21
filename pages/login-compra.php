<?php
require '../core/bootstraper.php';
require '../controllers/plant.controller.php';
require '../controllers/image_plants.controller.php';
if (!isset($_GET['id'])) {
    header("location:  ./products.php");
}
$plants = new PlantController($connectDB);
$plant = $plants->getPlantById($_GET['id']);

$image_plants = new ImageController($connectDB);
$image = $image_plants->getImageById($_GET['id']);
?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="es" dir="ltr">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/login.css">
</head>



<body>
    <div class="container">
        <?php
        if ($plant == "" || $image == "") {
            echo '<a href="../pages/products.php"><img class="img_mensaje" src="../assets/images/categories/no-hay-producto.png"></a>';
        } else {
            echo '
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="../assets/images/frontImg.jpg" alt="">
                <div class="text">
                    <span class="text-1">Cada nuevo amigo es un <br> nueva aventura</span>
                    <span class="text-2">Vamos a conectarnos</span>
                </div>
            </div>
            <div class="back">
                <img class="backImg" src="../assets/images/backImg.jpg" alt="">
                <div class="text">
                    <span class="text-1">Millas completas de viaje <br> con un paso</span>
                    <span class="text-2">Empecemos</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Inicio de Sesión</div>
                    <form action="../routes/auth.routes.php" method="POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" placeholder="Introducir dirección de correo electrónico" name="txtCorreo" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Introduce tu contraseña" name="txtPass" required>
                            </div>
                            <div class="text"><a href="./olvidarcontrasena.php" style="color:#b2d47d">¿Has olvidado tu contraseña?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Iniciar Sesion" name="btnAuthLoginProducto">
                            </div>
                            <div class="text sign-up-text">¿No tienes una cuenta? <label for="flip">Regístrate ahora</label></div>
                        </div>
                    </form>
                </div>
                <div class="signup-form">
                    <div class="title">Inscripción</div>
                    <form action="../routes/auth.routes.php" method="POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Introduce tu nombre" title="Nombre" id="nameInput" name="txtNombre">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Introducir dirección de correo electrónico" title="Correo Eléctronico" id="correoInput" name="txtCorreo">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Introduce tu contraseña" title="Contraseña" id="passInput" name="txtPass">
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Enviar" name="btnCrearCuentaProducto?id=' . $plant->getidPlants() . '" id="btnForm">
                            </div>
                            <div class="text sign-up-text">¿Ya tienes una cuenta? <label for="flip">Inicia sesión ahora</label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        ';
        }
        ?>
    </div>
    <?php include '../components/whatsapp.php' ?>
</body>

</html>