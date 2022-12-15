<?php
// if(!isset($_SESSION['categories'])){
//     header("location:  ../routes/category.routes.php?category&route=agregarProductos");
// }
require '../core/bootstraper.php';
require '../controllers/plant.controller.php';

$plant = new PlantController($connectDB);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/addproductimages.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main mt-5">

        <form action="../routes/image.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">
            <h1 style="text-align: center;">Agrega imágenes a tu producto</h1>

            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="../pages/agregarproductos.php">Añadir Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/agregarblog.php">Añadir Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../pages/addproductimages.php">Añadir Imagenes Productos</a>
                </li>
            </ul>

            <div class="col-md-5">
                <label for="inputState" class="form-label">Seleccione Producto</label>
                <select id="inputStateCategory" class="form-select" name="Product">
                    <?php
                    $listProduct = $plant->ListProduct();
                    for ($i = 0; $i < count($listProduct); $i++) {
                        $p = $listProduct[$i];
                        $id = $p->getidPlants();
                        $title = $p->geTitle();
                        echo "<option value='$id'>$title</option>";
                    }
                    ?>

                </select>
            </div>
            <div class="col-md-5">
                <label for="imagen" class="form-label">Imagen del Producto 1</label>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen1" multiple required>
            </div>

            <div class="col-md-5">
                <label for="imagen" class="form-label">Imagen del Producto 2</label>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen2" multiple required>
            </div>

            <div class="col-md-5">
                <label for="imagen" class="form-label">Imagen del Producto 3</label>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen3" multiple required>
            </div>

            <div class="col-md-5">
                <label for="imagen" class="form-label">Imagen del Producto 4</label>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen4" multiple required>
            </div>
            <div class="col-md-5">
                <label for="imagen" class="form-label">Imagen del Producto 5</label>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen5" multiple required>
            </div>

            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <input type="submit" value="Agregar" class="btn btn-success" name="btnCrearImagen" id="btnForm">
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