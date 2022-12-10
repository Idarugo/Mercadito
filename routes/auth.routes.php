<?php
require '../core/bootstraper.php';
require '../controllers/auth.controller.php';
$auth = new AuthController($connectDB);


if (isset($_POST['btnAuthLogin'])) {
    $auth->login($_POST["txtCorreo"], $_POST["txtPass"]);
}

if (isset($_POST['btnCrearCuenta'])) {
    if (empty($_POST["txtNombre"]) || empty($_POST["txtCorreo"]) || empty($_POST["txtPass"])) {
        header("location:  ../pages/login.php?txtEmptyError");
        return;
    }
    $auth->register($_POST["txtNombre"], $_POST["txtCorreo"], $_POST["txtPass"]);
}

if (isset($_GET['logout'])) {
    $auth->logout();
}


if (isset($_POST['btnConfirMail'])) {
    if (empty($_POST["txtConfirmMail"])) {
        header("location:  ../pages/olvidarcontrasena.php?txtEmptyError");
        return;
    }
    $auth->confirmail($_POST["txtConfirmMail"]);
}


if (isset($_POST['btnCrearContraseña'])) {
    if (empty($_POST["txtRecoverPass"]) || empty($_POST["txtPConfirmPass"])) {
        header("location:  ../pages/recuperarcontrasena.php?txtEmptyError");
        return;
    }
    $auth->modifyPassword($_POST["btnCrearContraseña"], $_POST["txtPConfirmPass"]);
}
