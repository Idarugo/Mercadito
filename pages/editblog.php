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
        <h1 style="text-align: center;">Editar Blog</h1>
        <div class="col-md-12">
            <center><img class="rounded" src="data:imagen/jpg;base64,<?php echo base64_encode($blog->getImagen()); ?>"></center>
        </div>
        <form action="../routes/blog.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">

            <div class="col-md-10">
                <input type="hidden" class="form-control" id="inputId" name="txtId" value="<?php echo $blog->getId(); ?>">
            </div>

            <div class="col-md-5">
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen" multiple>
            </div>

            <div class="col-md-5">
                <label for="inputName" class="form-label">Titulo</label>
                <input type="name" class="form-control" id="inputEmail4" name="txtNombre" value="<?php echo $blog->getNombre(); ?>">
            </div>

            <div class="col-md-5">
                <label for="inputDetall" class="form-label">Detalle</label>
                <input type="text" class="form-control" id="validationCustom03" name="txtDetalle" value="<?php echo $user->getDetalle(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="inputFech" class="form-label">Fecha</label>
                <input type="text" class="form-control" id="validationCustom03" name="txtFecha" value="<?php echo $user->getFecha(); ?>" required>
            </div>

            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <input type="submit" value="Modificar" class="btn btn-success" name="btnModificarBlog" id="btnForm">
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