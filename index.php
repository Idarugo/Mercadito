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
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active mb-5" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <video class="carousel-item active" data-bs-interval="5000" muted autoplay loop style="margin-top: 10px;">
          <source src="./assets/images/carrusel-1.mp4" class="d-block w-100" style="margin-top: 10px;" alt="">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </video>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="./assets/images/carrusel2.png" class="d-block w-100" style="margin-top: 10px;" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <video class="carousel-item" data-bs-interval="9000" muted autoplay loop style="margin-top: 10px;">
          <source src="./assets/images/carrusel3.mp4" class="d-block w-100" style="margin-top: 10px;" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </video>
      </div>
      <button class="carousel-control-prev mb-3" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="row mb-2" style="padding-top: 30px !important;">
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-367bdadf-cbaa-4440-8192-5b93f3398967"></div>
    </div>

    <div class="row">
      <div class="col" style="padding-left: 40px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.196849629194!2d-70.7721944!3d-34.14130559999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x917bae41b27b45dd!2zMzTCsDA4JzI4LjciUyA3MMKwNDYnMTkuOSJX!5e0!3m2!1ses!2scl!4v1667585697979!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col">
        <img src="./assets/images/Te-esperamos.png">
      </div>
    </div>



    <h2 style="text-align: center;">Síguenos en Instagram:</h2>

    <div class="container text-center">
      <div class="row">
        <div class="col">
          <a href="https://www.instagram.com/p/CK9WQEwB7tA/?utm_source=ig_web_copy_link"><img src="./assets/images/instagram1.jpg" class="inta-img d-block w-100 " alt="..."></a>
        </div>
        <div class="col">
          <a href="https://www.instagram.com/p/CdZYi34Lq4w/?utm_source=ig_web_copy_link"></a><img src="./assets/images/instagram2.jpg" class="inta-img d-block w-100" alt="..."></a>
        </div>
        <div class="col">
          <a href="https://www.instagram.com/p/CcMRlQYLi5q/?utm_source=ig_web_copy_link"></a><img src="./assets/images/instagram3.jpg" class="inta-img d-block w-100" alt="..."></a>
        </div>
        <div class="col">
          <a href="https://www.instagram.com/p/CK9WQEwB7tA/?utm_source=ig_web_copy_link"></a><img src="./assets/images/instagram4.jpg" class="inta-img d-block w-100" alt="..."></a>
        </div>
      </div>
    </div>

    <div class="mb-2"></div>

  </div>
  <?php include './components/footer.php' ?>
</body>

</html>