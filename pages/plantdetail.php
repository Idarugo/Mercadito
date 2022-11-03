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
    
                <div class="col aling-self-center">

            <h2 class="title" style="margin: 10px;">' . $plant->geTitle() . '</h2>

            <span style="margin: 10px;">Precio :$' . $plant->getPrice() . '</span>
     
            <p class="despacho-1" style="margin: 10px;">Tipo de entrega </p>
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

              <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Acerca de
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>' . $plant->getAbout() . '</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Tips
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>' . $plant->getTips() . '</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Beneficio para la Salud
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>' . $plant->getHealthBenefit() . '</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Cuidados Principales
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>' . $plant->getPrimaryCare() . '</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiver" aria-expanded="false" aria-controls="collapseFive">
                    También conocido como
                </button>
            </h2>
            <div id="collapseFiver" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>' . $plant->getAlsoKnownAs() . '</p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
      ';
        }
        ?>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>