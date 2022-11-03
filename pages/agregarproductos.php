<?php
// if(!isset($_SESSION['categories'])){
//     header("location:  ../routes/category.routes.php?category&route=agregarProductos");
// }
require '../core/bootstraper.php';
require '../controllers/category.controller.php';
require '../controllers/type_delivery.controller.php';

$category = new CategoryController($connectDB);
$delivery = new DeliveryController($connectDB);

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
            <div class="col-md-5">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="inputName" name="txtTitle">
            </div>
            <div class="col-md-5">
                <label for="inputState" class="form-label">Seleccione Categoria</label>
                <select id="inputStateCategory" class="form-select" name="Category">
                    <?php
                    $listCategory = $category->ListarCategory();
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
                <input type="text" class="form-control" id="inputName" name="txtDescription">
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
                <label for="inputState" class="form-label">Tipo de Entrega</label>
                <select id="inputStateTypeDelivery" class="form-select" name="TypeDelivery">
                    <?php
                    $listDelivery = $delivery->ListarDelivery();

                    for ($i = 0; $i < count($listDelivery); $i++) {
                        $d = $listDelivery[$i];
                        $id = $d->getid();
                        $name = $d->getNombre();
                        echo "<option value='$id'>$name</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-5">
                <label for="imagen" class="form-label">Imagen del Producto</label>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen" multiple>
            </div>
            <div class="col-5">
                <label for="inputName" class="form-label">Acerca De</label>
                <input type="text" class="form-control" id="inputName" name="txtAbout" placeholder="">
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