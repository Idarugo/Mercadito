<?php
require '../core/bootstraper.php';
require '../controllers/plant.controller.php';
$plant = new PlantController($connectDB);

/*
    *   PlantController
    */

if (isset($_POST['btnCrearProduct'])) {
    if (empty($_POST["txtTitle"])  || empty($_POST["Category"]) || empty($_POST["txtDescription"]) || empty($_POST["txtPrice"]) ||  empty($_POST["txtCant"])  || empty($_FILES["txtImagen"]) || empty($_POST["txtAbout"]) || empty($_POST["txtTips"]) || empty($_POST["txtHealthbenefit"]) || empty($_POST["txtPrimarycare"]) || empty($_POST["txtAlsoknownas"])) {
        header("location:  ../pages/agregarproductos.php?txtEmptyError");
        return;
    }
    $plant->registerPlants($_POST["txtTitle"], $_POST["txtPrice"], $_POST["txtDescription"], $_POST["Category"], $_FILES["txtImagen"], $_POST["txtCant"], $_POST["txtAbout"], $_POST["txtTips"], $_POST["txtHealthbenefit"], $_POST["txtPrimarycare"], $_POST["txtAlsoknownas"]);
}


if (isset($_POST['btnModificarProduct'])) {
    if (empty($_POST["txtId"]) || empty($_POST["txtTitle"])  || empty($_POST["Category"]) || empty($_POST["txtDescription"]) || empty($_POST["txtPrice"]) ||  empty($_POST["txtCant"])  || empty($_FILES["txtImagen"]) || empty($_POST["txtAbout"]) || empty($_POST["txtTips"]) || empty($_POST["txtHealthbenefit"]) || empty($_POST["txtPrimarycare"]) || empty($_POST["txtAlsoknownas"])) {
        header("location:  ../pages/modificarproducto.php?txtEmptyError");
        return;
    }
    $plant->updateProduct($_POST["txtId"], $_POST["txtTitle"], $_POST["txtPrice"], $_POST["txtDescription"], $_POST["Category"], $_FILES["txtImagen"], $_POST["txtCant"], $_POST["txtAbout"], $_POST["txtTips"], $_POST["txtHealthbenefit"], $_POST["txtPrimarycare"], $_POST["txtAlsoknownas"]);
}


/*
    *   Get Plant
    */
if (isset($_GET['getPlant'])) {
    $plant->getPlant($_GET['id']);

    if (isset($_GET['products'])) {
        header("location:  ../pages/products.php");
    }
    if (isset($_GET['listProducts'])) {
        header("location:  ../pages/listarproductos.php");
    }


    header("location:  ../pages/products.php");
}

if (isset($_GET['btnElminarPlant'])) {
    $plant->removePlant($_GET["btnElminarPlant"]);
}
