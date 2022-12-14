<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/agregarblog.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main mt-5">

        <form action="../routes/blog.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">
            <h1 style="text-align: center;">Agregar Blog</h1>

            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="../pages/agregarproductos.php" required>Añadir Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../pages/agregarblog.php" required>Añadir Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/addproductimages.php" required>Añadir Imagenes Productos</a>
                </li>
            </ul>

            <div class="col-md-5">
                <label for="imagen" class="form-label">Imagen</label>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen" multiple required>
            </div>
            <div class="col-md-5">
                <label for="inputName" class="form-label">Titulo</label>
                <input type="name" class="form-control" id="inputName" name="txtNombre" required>
            </div>
            <div class="col-md-10">
                <label for="exampleFormControlTextarea1" class="form-label">Detalle</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="txtDetalle" rows="3" required></textarea>
            </div>
            <div class="col-md-10">
                <label for="inputName" class="form-label">Fecha</label>
                <input type="name" class="form-control" id="inputName" name="txtFecha" required>
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <input type="submit" value="Agregar" class="btn btn-success" name="btnCrearBlog" id="btnForm">
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./perfil.php"><button type="button" class="btn btn-success btn btn-dark">
                        < Volver</button></a>
            </div>
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>