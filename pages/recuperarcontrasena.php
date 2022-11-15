<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="es" dir="ltr">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/recuperarcontrasena.css">
</head>

<body>
    <div class="container">
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
                <div class="signup-form">
                    <div class="title">Recuperar Contraseña</div>
                    <form action="../routes/auth.routes.php" method="POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Nueva contraseña" title="Contraseña" id="passInput" name="txtRecoverPass">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Confirmar contraseña" title="Contraseña" id="passInput" name="txtPConfirmPass">
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Modificar" name="btnCrearContrasena">
                            </div>
                            <div class="text sign-up-text" class="recuperar"><a href="./login.php" for="flip">Volver login</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include '../components/whatsapp.php' ?>
</body>

</html>