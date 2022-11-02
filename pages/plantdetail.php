<?php
require '../core/bootstraper.php';
require '../controllers/plant.controller.php';
if (!isset($_GET['id'])) {
    header("location:  ./products.php");
}
$plants = new PlantController($connectDB);
$plant = $plants->getPlantById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/plantdetail.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">


        <?php
        if ($plant == "") {
            echo '<a href="../pages/products.php"><img class="img_mensaje" src="../assets/images/categories/no-hay-producto.png"></a>';
        } else {
            echo '
        <div class="row" style="margin-top: 20px;">
         <div class="col aling-self-center">
            <img class="img_plant" src="data:imagen/jpg;base64,' . base64_encode($plant->getImage()) . '">
            <div class="row mt-2">
                <div class="col-2">
                    <img class="img_plant-min" src="data:imagen/jpg;base64,' . base64_encode($plant->getImage()) . '" alt="">
                </div>

                <div class="col-2">
                    <img class="img_plant-min" src="data:imagen/jpg;base64,' . base64_encode($plant->getImage()) . '" alt="">
                </div>

                <div class="col-2">
                    <img class="img_plant-min" src="data:imagen/jpg;base64,' . base64_encode($plant->getImage()) . '" alt="">
                </div>

                <div class="col-2">
                    <img class="img_plant-min" src="data:imagen/jpg;base64,' . base64_encode($plant->getImage()) . '" alt="">
                </div>

                <div class="col-2">
                    <img class="img_plant-min" src="data:imagen/jpg;base64,' . base64_encode($plant->getImage()) . '" alt="">
                </div>
            </div>
          </div>
        </div>

        <div class="row" style="margin-top: 20px;">

        <div class="col aling-self-center">

            <h2 class="title" style="margin: 10px;">' . $plant->geTitle() . '</h2>

            <span style="margin: 10px;"><del>alt="' . $plant->getPrice() . '"</del></span>
     

            <li type="disc" class="despacho" style="margin: 10px;">' . $plant->getTypeDelivery() . '</li>

            <button class="btn-agregar">
                <span> Agregar al carrito </span>
            </button>

            <button class="btn-comprar">
                <a href="../pages/carrodecompra.php"> Comprar Ahora</a>
            </button>

            <font style="vertical-align: inherit;">
                <p>
                    <LI>' . $plant->getDescription() . '</LI>
                </p>
            </font>

        </div>
    </div>
      ';
        }
        ?>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>