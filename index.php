<!DOCTYPE html>
<html lang="es">
<head>
    <?php include './components/head.php' ?>
    <link rel="stylesheet" href="./assets/styles/main.css">
    <link rel="stylesheet" href="./assets/styles/pages/home.css">
</head>
<body>
    <?php include './components/header.php' ?>
    <div class="container container-main">

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="../assets/images/carrusel1.mp4" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="../assets/images/carrusel2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="9000">
          <img src="../assets/images/carrusel3.mp4"  class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="row mb-2">
        <div class="col aling-self-center" >
        <div class="col-11">
        <img class="img1" src="../assets/images/Te-esperamos.png " href="https://www.google.com/maps/place/34°08'28.7%22S+70°46'19.9%22W/@-34.1413002,-70.7743826,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x2c597ed84a9ca751!8m2!3d-34.1413002!4d-70.7721939?hl=es">
             </div>
        </div>
    </div>

    <h2 style="text-align: center;">Síguenos en Instagram:</h2>

    <div class="container text-center">
      <div class="row">
        <div class="col">
        <img src="../assets/images/instagram1.jpg" href="https://www.instagram.com/mercadito_jessicamoreno" class="d-block w-100" alt="...">
        </div>
        <div class="col">
        <img src="../assets/images/instagram2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="col">
        <img src="../assets/images/instagram3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="col">
        <img src="../assets/images/instagram4.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>

    <div class="mb-2"></div>


        

    </div>
    <?php include './components/footer.php' ?>
</body>
</html>


