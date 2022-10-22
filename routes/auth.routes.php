<?php
    require '../core/bootstraper.php';
    require '../controllers/auth.controller.php';
    $auth = new AuthController( $connectDB );

    /*
    *   Login
    */
    if(isset($_POST['btnAuthLogin'])){
        $auth->login($_POST["txtCorreo"],$_POST["txtPass"]);
    }
    /*
    *   Register
    */
    if(isset($_POST['btnCrearCuenta'])){
         if(empty($_POST["txtNombre"]) || empty($_POST["txtCorreo"]) || empty($_POST["txtPass"])|| empty($_POST["txtImagen"])|| empty($_POST["txtDireccion"])|| empty($_POST["txtRol"])|| empty($_POST["txtEstado"])){
             header("location:  ../pages/login.php?txtEmptyError");
             return;
         }
         $auth->register($_POST["txtNombre"],$_POST["txtCorreo"],$_POST["txtPass"],$_POST["txtImagen"],$_POST["txtDireccion"],$_POST["txtRol"],$_POST["txtEstado"]);
    }
     /*
    *   Logout
    */
    if(isset($_GET['logout'])){
        echo "123";
        $auth->logout();
    }
?>