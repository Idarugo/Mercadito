<?php
// if(!isset($_SESSION['categories'])){
//     header("location:  ../routes/category.routes.php?category&route=agregarProductos");
// }
require '../core/bootstraper.php';
require '../controllers/category.controller.php';

$category = new CategoryController($connectDB);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/agregarproductos.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main mt-5">

        <form action="../routes/plant.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">
            <h1 style="text-align: center;">Agregar Productos</h1>

            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../pages/agregarproductos.php">Añadir Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/agregarblog.php">Añadir Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/addproductimages.php">Añadir Imagenes Productos</a>
                </li>
            </ul>


            <div class="col-md-5">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="inputName" name="txtTitle">
            </div>
            <div class="col-md-5">
                <label for="inputState" class="form-label">Seleccione Categoria</label>
                <select id="inputStateCategory" class="form-select" name="Category">
                    <?php
                    $listCategory = $category->ListCategory();
                    for ($i = 0; $i < count($listCategory); $i++) {
                        $c = $listCategory[$i];
                        $id = $c->getid();
                        $name = $c->getName();
                        echo "<option value='$id'>$name</option>";
                    }
                    ?>

                </select>
            </div>
            <div class="col-md-5">
                <label for="inputName" class="form-label">Descripcion</label>
                <textarea class="form-control" id="inputName" name="txtDescription" rows="3" placeholder=""></textarea>
            </div>
            <div class="col-5">
                <label for="inputAddress2" class="form-label">Precio</label>
                <input type="number" class="form-control" id="inputAddress2" placeholder="" name="txtPrice">
            </div>
            <div class="col-5">
                <label for="inputAddress2" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="inputAddress2" name="txtCant" placeholder="">
            </div>
            <div class="col-md-5">
                <label for="imagen" class="form-label">Imagen del Producto</label>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen" multiple>
            </div>
            <div class="col-10">
                <label for="inputName" class="form-label">Acerca De</label>
                <textarea class="form-control" id="inputName" name="txtAbout" rows="3" placeholder=""></textarea>
            </div>
            <div class="col-5">
                <label for="inputName" class="form-label">Tips</label>
                <input type="text" class="form-control" id="inputName" name="txtTips" placeholder="">
            </div>
            <div class="col-5">
                <label for="inputName" class="form-label">Cuidados Principales</label>
                <input type="text" class="form-control" id="inputName" name="txtHealthbenefit" placeholder="">
            </div>
            <div class="col-5">
                <label for="inputName" class="form-label">Beneficio Para la salud</label>
                <input type="text" class="form-control" id="inputName" name="txtPrimarycare" placeholder="">
            </div>
            <div class="col-5">
                <label for="inputName" class="form-label">Tambien conocido como</label>
                <input type="text" class="form-control" id="inputName" name="txtAlsoknownas" placeholder="">
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <input type="submit" value="Agregar" class="btn btn-success" name="btnCrearProduct" id="btnForm">
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