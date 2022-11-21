<?php
require '../core/bootstraper.php';
require '../controllers/plant.controller.php';
require '../controllers/category.controller.php';
if (!isset($_GET['id'])) {
    header("location:  ./listarproductos.php");
}
$plant = new PlantController($connectDB);
$category = new CategoryController($connectDB);

$PlantById = $plant->getPlantById($_GET['id']);
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
        <h1 style="text-align: center;">Editar Producto</h1>

        <div class="col-md-12" onclick="redirectTo('pages/modificarimagenproducto.php?id=<?php echo $PlantById->getidPlants(); ?>')">

            <center><img class="img-product" src="data:imagen/jpg;base64,<?php echo base64_encode($PlantById->getImage()); ?>"></center>
        </div>
        <form action="../routes/plant.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">
            <div class="col-md-10">
                <input type="hidden" class="form-control" id="inputId" name="txtId" value="<?php echo $PlantById->getidPlants(); ?>">
            </div>
            <div class="col-md-5">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="name" class="form-control" id="inputName" name="txtTitle" value="<?php echo $PlantById->geTitle(); ?>">
            </div>
            <div class="col-md-5">
                <label for="inputStateCategory" class="form-label">Categoria</label>
                <input id="inputStateCategory" class="form-select" name="Category" value="<?php echo $PlantById->getCategory(); ?>">
                </select>
            </div>

            <div class="col-md-5">
                <label for="inputDescription" class="form-label">Descripcion</label>
                <input type="text" class="form-control" id="inputDescription" name="txtDescription" value="<?php echo $PlantById->getDescription(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="inputPrice" class="form-label">Precio</label>
                <input type="text" class="form-control" id="inputName" name="txtPrice" value="<?php echo $PlantById->getPrice(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="inputName" name="txtCant" value="<?php echo $PlantById->getCant(); ?>" required>
            </div>


            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Acerca De</label>
                <textarea type="text" class="form-control" id="inputName" name="txtAbout" rows="3" value="<?php echo $PlantById->getAbout(); ?>"></textarea>
            </div>

            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Tips</label>
                <input type="text" class="form-control" id="inputName" name="txtTips" value="<?php echo $PlantById->getTips(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Cuidado Principal</label>
                <input type="text" class="form-control" id="inputName" name="txtPrimarycare" value="<?php echo $PlantById->getPrimaryCare(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Beneficio Para la salud</label>
                <input type="text" class="form-control" id="inputName" name="txtHealthbenefit" value="<?php echo $PlantById->getHealthBenefit(); ?>" required>
            </div>

            <div class="col-md-5">
                <label for="validationCustom03" class="form-label">Tambien conocido como</label>
                <input type="text" class="form-control" id="inputName" name="txtAlsoknownas" value="<?php echo $PlantById->getAlsoKnownAs(); ?>" required>
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