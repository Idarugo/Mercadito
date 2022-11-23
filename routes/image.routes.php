<?php
require '../core/bootstraper.php';
require '../controllers/image_plants.controller.php';
$image = new ImageController($connectDB);

/*
    *   ImageController
    */

if (isset($_POST['btnCrearImagen'])) {
    if (empty($_POST["Product"]) || empty($_FILES["txtImagen1"])  || empty($_FILES["txtImagen2"]) || empty($_FILES["txtImagen3"]) || empty($_FILES["txtImagen4"]) ||  empty($_FILES["txtImagen5"])) {
        header("location:  ../pages/addproductimages.php?txtEmptyError");
        return;
    }
    $image->registerimage($_POST["Product"], $_FILES["txtImagen1"], $_FILES["txtImagen2"], $_FILES["txtImagen3"], $_FILES["txtImagen4"], $_FILES["txtImagen5"]);
}

if (isset($_GET['btnElminarImage'])) {
    $image->removeImage($_GET["btnElminarImage"]);
}

if (isset($_POST['btnModificarImages1'])) {
    if (empty($_POST["txtId"]) || empty($_POST["Product"])  || empty($_FILES["txtImagen1"])) {
        header("location:  ../pages/modificarimagen1.php?txtEmptyError");
        return;
    }
    $image->updateImagen1($_POST["txtId"], $_POST["Product"], $_FILES["txtImagen1"]);
}

if (isset($_POST['btnModificarImages2'])) {
    if (empty($_POST["txtId"]) || empty($_POST["Product"])  || empty($_FILES["txtImagen2"])) {
        header("location:  ../pages/modificarimagen2.php?txtEmptyError");
        return;
    }
    $image->updateImagen2($_POST["txtId"], $_POST["Product"], $_FILES["txtImagen2"]);
}

if (isset($_POST['btnModificarImages3'])) {
    if (empty($_POST["txtId"]) || empty($_POST["Product"])  || empty($_FILES["txtImagen3"])) {
        header("location:  ../pages/modificarimagen3.php?txtEmptyError");
        return;
    }
    $image->updateImagen3($_POST["txtId"], $_POST["Product"], $_FILES["txtImagen3"]);
}

if (isset($_POST['btnModificarImages4'])) {
    if (empty($_POST["txtId"]) || empty($_POST["Product"])  || empty($_FILES["txtImagen4"])) {
        header("location:  ../pages/modificarimagen4.php?txtEmptyError");
        return;
    }
    $image->updateImagen4($_POST["txtId"], $_POST["Product"], $_FILES["txtImagen4"]);
}

if (isset($_POST['btnModificarImages5'])) {
    if (empty($_POST["txtId"]) || empty($_POST["Product"])  || empty($_FILES["txtImagen5"])) {
        header("location:  ../pages/modificarimagen5.php?txtEmptyError");
        return;
    }
    $image->updateImagen5($_POST["txtId"], $_POST["Product"], $_FILES["txtImagen5"]);
}
