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
        <h1 style="text-align: center;">Editar Productos</h1>

        <form action="../routes/plant.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">
            <div class="col-md-10">
                <input type="hidden" class="form-control" id="inputId" name="txtId" value="<?php echo $plant->getidPlants(); ?>">
            </div>
            <div class="col-md-5">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="name" class="form-control" id="inputName" name="txtTitle" value="<?php echo $plant->geTitle(); ?>">
            </div>
            <div class="col-md-5">
                <label for="inputStateCategory" class="form-label">Categoria</label>
                <input id="inputStateCategory" class="form-select" name="Category" value="<?php echo $plant->getCategory(); ?>">
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
                <label for="inputDescription" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="inputDescription" name="txtDescription" value="<?php echo $plant->getDescription(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="inputPrice" class="form-label">Precio</label>
                <input type="text" class="form-control" id="inputName" name="txtPrice" value="<?php echo $plant->getPrice(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="inputName" name="txtCant" value="<?php echo $plant->getCant(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="inputState" class="form-label">Entrega</label>
                <input id="inputStateTypeDelivery" class="form-select" name="TypeDelivery" value="<?php echo $plant->getTypeDelivery(); ?>">
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
                <center><img class="rounded" src="data:imagen/jpg;base64,<?php echo base64_encode($plant->getImage()); ?>"></center>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImagen" multiple>
            </div>

            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Acerca De</label>
                <input type="text" class="form-control" id="inputName" name="txtAbout" value="<?php echo $plant->getAbout(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Tips</label>
                <input type="text" class="form-control" id="inputName" name="txtTips" value="<?php echo $plant->getTips(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Cuidado Principal</label>
                <input type="text" class="form-control" id="inputName" name="txtPrimarycare" value="<?php echo $plant->primaryCare(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Beneficio Para la salud</label>
                <input type="text" class="form-control" id="inputName" name="txtHealthbenefit" value="<?php echo $plant->getHealthBenefit(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Tambien conocido como</label>
                <input type="text" class="form-control" id="inputName" name="txtAlsoknownas" value="<?php echo $plant->getAlsoKnownAs(); ?>" required>
            </div>

            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <input type="submit" value="Editar" class="btn btn-success" name="btnModificarProduct" id="btnForm">
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./listarproductos.php"><button type="button" class="btn btn-success btn btn-dark">
                        < Volver</button></a>
            </div>
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>