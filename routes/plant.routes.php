<?php
    require '../core/bootstraper.php';
    require '../controllers/plant.controller.php';
    $plant = new PlantController( $connectDB );

    /*
    *   PlantController
    */
    
    if(isset($_POST['btnCrearProduct'])){
        if(empty($_POST["txtTitle"]) || empty($_POST["txtPrice"]) || empty($_POST["txtDescription"]) || empty($_POST["txtCategory"]) || empty($_POST["txtImage"]) || empty($_POST["txtCant"]) || empty($_POST["txtTypeDelivery"])){
            header("location:  ../pages/agregarproductos.php?txtEmptyError");
            return;
        }
        $plant->registerPlants($_POST["txtTitle"],$_POST["txtPrice"],$_POST["txtDescription"],$_POST["txtCategory"],$_POST["txtImage"],$_POST["txtCant"],$_POST["txtTypeDelivery"]);
    }

    /*
    *   Get Plant
    */
    if(isset($_GET['getPlant'])){
        $plant->getPlant($_GET['id']);

        if(isset($_GET['products'])){
            header("location:  ../pages/products.php");
        }
        if(isset($_GET['listProducts'])){
            header("location:  ../pages/listarproductos.php");
        }
        
        
        header("location:  ../pages/products.php");
    }
    
?>