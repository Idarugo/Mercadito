<?php
require '../core/bootstraper.php';
require '../controllers/plant.controller.php';
if (!isset($_GET['category'])) {
  header("location:  ./tiendaonline.php");
}
$plants = new PlantController($connectDB);
$plantsByIdCategory = $plants->getAllPlantsByIdCategory($_GET['category']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php include '../components/head.php' ?>
  <link rel="stylesheet" href="../assets/styles/main.css">
  <link rel="stylesheet" href="../assets/styles/pages/products.css">
</head>

<body>
  <?php include '../components/header.php' ?>

  <div class="container">
    <h1></h1>
  </div>
  <section class="container-fluid banner">
    <div class="banner__img"></div>
    <h1></h1>
    <p></p>
  </section>
  <div class="container container-main">
    <div class="collection_filter_item"><?= count($plantsByIdCategory); ?> Articulos</div>

    <div class="container container-main container-plants">

      <?php
      if (count($plantsByIdCategory) == 0) {
        echo 'No hay Productos';
      }
      for ($i = 0; $i < count($plantsByIdCategory); $i++) {
        echo '
      <article  class="categoria-plant">
        <a class="categoria-title" href="../pages/plantdetail.php">' . $plantsByIdCategory[$i]->geTitle() . '</a>
        <div class="plant_secondary-image">
          <a href="#">
            <img class="img_planta" src="data:imagen/jpg;base64,' . base64_encode($plantsByIdCategory[$i]->getImage()) . '" alt="' . $plantsByIdCategory[$i]->geTitle() . '">
          </a>
        </div>
      </article>
      ';
      }
      ?>


    </div>
    <br />
  </div>
  <?php include '../components/footer.php' ?>
</body>

</html>