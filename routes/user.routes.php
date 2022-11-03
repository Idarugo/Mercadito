<?php
require '../core/bootstraper.php';
require '../controllers/user.controller.php';
$user = new UserController($connectDB);

/*
    *   Modificar
    */
if (isset($_POST['btnModificarCuenta'])) {
    if (empty($_POST["txtId"]) || empty($_POST["txtNombre"]) || empty($_POST["txtCorreo"]) || empty($_POST["txtPass"])  || empty($_POST["txtDireccion"])) {
        header("location:  ../pages/modificarusuario.php?txtEmptyError");
        return;
    }
    $user->update($_POST["txtId"], $_POST["txtNombre"], $_POST["txtCorreo"], $_POST["txtPass"], $_POST["txtDireccion"]);
}

if (isset($_POST['btnModificarImagen'])) {
    if (empty($_FILES["txtImagen"])) {
        header("location:  ../pages/modifyimage.php?txtEmptyError");
        return;
    }
    $user->updateImagen($_POST["txtId"], $_FILES["txtImagen"]);
}

if (isset($_GET['btnElminarUsu'])) {
    $user->removeUser($_GET["btnElminarUsu"]);
}
