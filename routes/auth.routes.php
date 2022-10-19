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
        // if(empty($_POST["txtNombre"]) || empty($_POST["txtApellido"]) || empty($_POST["txtCorreo"]) || empty($_POST["txtPass"])){
        //     header("location:  ../pages/register.php?txtEmptyError");
        //     return;
        // }
        // $auth->register($_POST["txtNombre"],$_POST["txtApellido"],$_POST["txtCorreo"],$_POST["txtPass"]);
    }
     /*
    *   Logout
    */
    if(isset($_GET['logout'])){
        echo "123";
        $auth->logout();
    }
?>