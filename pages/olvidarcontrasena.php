<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/login.css">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="/assets/images/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Cada nuevo amigo es un <br> nueva aventura</span>
          <span class="text-2">Vamos a conectarnos</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="/assets/images/backImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Millas completas de viaje <br> con un paso</span>
          <span class="text-2">Empecemos</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Restablecer su contraseña</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Introducir dirección de correo electrónico" required>
              </div>
               <div class="button input-box">
                <input type="submit" value="Recuperar">
              </div>
              <div class="text sign-up-text">¿Ya tienes una cuenta? <a href="./login.php" style="color:#b2d47d">Inicia sesión ahora</a></div>
            </div>
        </form>
      </div>
      </form>
    </div>
    </div>
    </div>
  </div>
  <?php include './components/whatsapp.php' ?>
</body>
</html>
