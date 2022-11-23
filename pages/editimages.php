<?php
require '../core/bootstraper.php';
require '../controllers/image_plants.controller.php';
if (!isset($_GET['id'])) {
    header("location:  ../listimages.php");
}
$image = new ImageController($connectDB);
$images = $image->getImageById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/editblog.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1 style="text-align: center;">Editar Imagenes Producto</h1>
        <form action="../routes/image.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">

            <div class="col-md-12">
                <input type="hidden" class="form-control" id="inputId" name="txtId" value="<?php echo $images->getid(); ?>">
            </div>
            <div class="col-md-12">
                <input type="hidden" class="form-control" id="inputId" name="Product" value="<?php echo $images->getPlants(); ?>">
            </div>

            <div class="col-md-2" onclick="redirectTo('pages/modificarimagen1.php?id=<?php echo $images->getid(); ?>')">
                <center><label for="inputName" class="form-label">Imagen 1</label></center>
                <center><img class="img-blog" src="data:imagen/jpg;base64,<?php echo base64_encode($images->getImage1()); ?>"></center>
            </div>

            <div class="col-md-2" onclick="redirectTo('pages/modificarimagen2.php?id=<?php echo $images->getid(); ?>')">
                <center><label for="inputName" class="form-label">Imagen 2</label></center>
                <center><img class="img-blog" src="data:imagen/jpg;base64,<?php echo base64_encode($images->getImage2()); ?>"></center>
            </div>

            <div class="col-md-2" onclick="redirectTo('pages/modificarimagen3.php?id=<?php echo $images->getid(); ?>')">
                <center><label for="inputName" class="form-label">Imagen 3</label></center>
                <center><img class="img-blog" src="data:imagen/jpg;base64,<?php echo base64_encode($images->getImage3()); ?>"></center>
            </div>

            <div class="col-md-2" onclick="redirectTo('pages/modificarimagen4.php?id=<?php echo $images->getid(); ?>')">
                <center><label for="inputName" class="form-label">Imagen 4</label></center>
                <center><img class="img-blog" src="data:imagen/jpg;base64,<?php echo base64_encode($images->getImage4()); ?>"></center>
            </div>

            <div class="col-md-2" onclick="redirectTo('pages/modificarimagen5.php?id=<?php echo $images->getid(); ?>')">
                <center><label for="inputName" class="form-label">Imagen 5</label></center>
                <center><img class="img-blog" src="data:imagen/jpg;base64,<?php echo base64_encode($images->getImage5()); ?>"></center>
            </div>

            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <input type="submit" value="Modificar" class="btn btn-success" name="btnModificarImages" id="btnForm">
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./listimages.php"><button type="button" class="btn btn-success btn btn-dark">
                        < Volver</button></a>
            </div>

        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>