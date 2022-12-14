<?php
require '../core/bootstraper.php';
require '../controllers/blog.controller.php';
if (!isset($_GET['id'])) {
    header("location:  ./listarblog.php");
}
$blog = new BlogController($connectDB);
$BlogsById = $blog->getBlogById($_GET['id']);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/modificarproducto.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1 style="text-align: center;">Modificar imagen blog</h1>

        <div class="col-md-12">
            <center><img class="img-product" src="data:imagen/jpg;base64,<?php echo base64_encode($BlogsById->getImagen()); ?>"></center>
        </div>
        <form action="../routes/blog.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">
            <div class="col-md-10">
                <input type="hidden" class="form-control" id="inputId" name="txtId" value="<?php echo $BlogsById->getId(); ?>">
            </div>
            <div class="col-md-10">
                <label for="inputName" class="form-label">Imagen del blog</label>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen" required>
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <input type="submit" value="Editar" class="btn btn-success" name="btnModificarImagenBlog" id="btnForm">
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./listarblog.php"><button type="button" class="btn btn-success btn btn-dark">
                        < Volver</button></a>
            </div>
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>