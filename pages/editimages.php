<?php
require '../core/bootstraper.php';
require '../controllers/image_plants.controller.php';
if (!isset($_GET['id'])) {
    header("location:  ./listimages.php");
}
$images = new ImageController($connectDB);
$image = $images->getImageById($_GET['id']);
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
                <input type="hidden" class="form-control" id="inputId" name="txtId" value="<?php echo $image->getid(); ?>">
            </div>
            <div class="col-md-12">
                <input type="hidden" class="form-control" id="inputId" name="Product" value="<?php echo $image->getPlants(); ?>">
            </div>

            <div class="col-md-4">
                <center><label for="inputName" class="form-label">Imagen 1</label></center>
                <center><img class="img-blog" src="data:imagen/jpg;base64,<?php echo base64_encode($image->getImage1()); ?>"></center>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen1" multiple>
            </div>

            <div class="col-md-4">
                <center><label for="inputName" class="form-label">Imagen 2</label></center>
                <center><img class="img-blog" src="data:imagen/jpg;base64,<?php echo base64_encode($image->getImage2()); ?>"></center>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen2" multiple>
            </div>

            <div class="col-md-4">
                <center><label for="inputName" class="form-label">Imagen 3</label></center>
                <center><img class="img-blog" src="data:imagen/jpg;base64,<?php echo base64_encode($image->getImage3()); ?>"></center>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen3" multiple>
            </div>

            <div class="col-md-4">
                <center><label for="inputName" class="form-label">Imagen 4</label></center>
                <center><img class="img-blog" src="data:imagen/jpg;base64,<?php echo base64_encode($image->getImage4()); ?>"></center>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen4" multiple>
            </div>

            <div class="col-md-4">
                <center><label for="inputName" class="form-label">Imagen 5</label></center>
                <center><img class="img-blog" src="data:imagen/jpg;base64,<?php echo base64_encode($image->getImage5()); ?>"></center>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen5" multiple>
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