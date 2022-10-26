<?php
    require '../core/bootstraper.php';
    require '../controllers/user.controller.php';
    $user = new UserController( $connectDB );

    /*
    *   Modificar
    */
    if(isset($_POST['btnModificarCuenta'])){
        if(empty($_POST["txtNombre"]) || empty($_POST["txtCorreo"]) || empty($_POST["txtPass"]) || empty($_POST["txtDireccion"]) || empty($_POST["txtImagen"]) ){
            header("location:  ../pages/modificarusuario.php?txtEmptyError");
            return;
        }
        $user->update($_POST["txtNombre"],$_POST["txtCorreo"],$_POST["txtPass"],$_POST["txtDireccion"],$_POST["txtImagen"]);
    }

?>