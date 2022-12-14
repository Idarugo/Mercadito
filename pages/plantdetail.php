<?php
require '../core/bootstraper.php';
require '../controllers/user.controller.php';
require '../controllers/plant.controller.php';
require '../controllers/image_plants.controller.php';
$id = "";
if (!isset($_GET['id'])) {
    header("location:  ./tiendaonline.php");
} else {
    $id = $_GET["id"];
}

$users = new UserController($connectDB);

$plant = new PlantController($connectDB);
$Planta = $plant->getPlantById($id);

$image_plants = new ImageController($connectDB);
$image = $image_plants->getImageById($id);

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
        $user = $users->getUsersById($user->getId());
        ?>
        <form action="../routes/venta.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">


            <div class="col-md-3">
                <input type="hidden" class="form-control" id="inputUser" name="txtUsuario" value="<?php echo $user->getId(); ?>">
            </div>

            <div class="col-md-3">
                <input type="hidden" class="form-control" id="inputId" name="txtPlant" value="<?php echo $Planta->getidPlants(); ?>">
            </div>

            <div class="col-md-3">
                <input type="hidden" class="form-control" id="inputUser" name="txtCant" value="1">
            </div>

            <div class="col-md-3">
                <input type="hidden" class="form-control" id="inputId" name="txtTotal" value="<?php echo $Planta->getPrice(); ?>">
            </div>


            <?php
            if ($plant == "" || $image == "") {
                echo '<a href="../pages/products.php"><img class="img_mensaje" src="../assets/images/categories/no-hay-producto.png"></a>';
            } else {
                echo '
        <div class="row" style="margin-top: 20px;">
         <div class="col aling-self-center">
            <img class="img_plant" src="data:imagen/jpg;base64,' . base64_encode($Planta->getImage()) . '">
            <div class="row mt-2">
                <div class="col-2">
                    <img class="img_plant-min" src="data:imagen/jpg;base64,' . base64_encode($image->getImage1()) . '" alt="">
                </div>

                <div class="col-2">
                    <img class="img_plant-min" src="data:imagen/jpg;base64,' . base64_encode($image->getImage2()) . '" alt="">
                </div>

                <div class="col-2">
                    <img class="img_plant-min" src="data:imagen/jpg;base64,' . base64_encode($image->getImage3()) . '" alt="">
                </div>

                <div class="col-2">
                    <img class="img_plant-min" src="data:imagen/jpg;base64,' . base64_encode($image->getImage4()) . '" alt="">
                </div>

                <div class="col-2">
                    <img class="img_plant-min" src="data:imagen/jpg;base64,' . base64_encode($image->getImage5()) . '" alt="">
                    </div>
                    </div>
    
                </div>
    
                <div class="col aling-self-center">

            <h2 class="title" style="margin: 10px;">' . $Planta->geTitle() . '</h2>

            <span style="margin: 10px;" >Precio :$' . $Planta->getPrice() . '</span>

            
            <div class="col-md-10">
            </div>

            <button class="btn-agregar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Agregar al carrito</button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrito de compra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="row" style="margin-top: 20px;">
                    <div class="col aling-self-center">
                        <img class="img_plant-min" src="data:imagen/jpg;base64,' . base64_encode($Planta->getImage()) . '">
                    </div>
                </div>

                <div class="col aling-self-center">
                    <h2 class="title" style="margin: 10px;">' . $Planta->geTitle() . '</h2>
                    <span style="margin: 10px;">Precio :$' . $Planta->getPrice() . '</span>
                </div>

                <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                     <a href="./perfil.php"><button type="button" class="btn btn-success btn btn-dark">Ver Carrito</button></a>
                </div>

            </div>
            </div>
                        
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <input type="submit" value="Comprar Ahora " class="btn-comprar" name="btnagregarCarro" id="btnForm">
            </div>

            </a>

            <font style="vertical-align: inherit;">
                <p>
                    <LI>' . $Planta->getDescription() . '</LI>
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
                        <p>' . $Planta->getAbout() . '</p>
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
                        <p>' . $Planta->getTips() . '</p>
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
                        <p>' . $Planta->getPrimaryCare() . '</p>
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
                        <p>' . $Planta->getHealthBenefit() . '</p>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiver" aria-expanded="false" aria-controls="collapseFive">
                    Tambi??n conocido como
                </button>
            </h2>
            <div id="collapseFiver" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>' . $Planta->getAlsoKnownAs() . '</p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
      ';
            }
            ?>
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>