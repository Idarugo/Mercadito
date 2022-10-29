
<?php
   // if(!isset($_SESSION['categories'])){
   //     header("location:  ../routes/category.routes.php?category&route=agregarProductos");
   // }
   require '../core/bootstraper.php';
   require '../controllers/category.controller.php';
   
   $category = new CategoryController($connectDB);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/agregarproductos.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main mt-5">

        <form action="../routes/plant.routes.php" method="POST" class="row g-3 justify-content-center">
                <h1 style="text-align: center;">Agregar Productos</h1>
            <div class="col-md-5">
                <label for="inputName" class="form-label" name="txtTitle">Nombre</label>
                <input type="name" class="form-control" id="inputName">
            </div>
            <div class="col-md-5">
                <label for="inputState" class="form-label">Seleccione Categoria</label>
                <select id="inputState" class="form-select" name="txtCategory">
                <?php
                $listCategory = $category->ListarCategory();

                for($i=0;$i<count($listCategory);$i++){
                $c = $listCategory[$i];
                $id = $c->getid();
                $name = $c->getName();
                echo "<option value='$id'>$name</option>";
                }
                ?>

                </select>
            </div>
            <div class="col-md-10">
                <label for="inputName" class="form-label">Descripcion</label>
                <input type="name" class="form-control" id="inputName" name="txtDescription" >
            </div>
            <div class="col-5">
                <label for="inputAddress2" class="form-label">Precio</label>
                <input type="precio" class="form-control" id="inputAddress2" placeholder="" name="txtPrice">
            </div>
            <div class="col-5">
                <label for="inputAddress2" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="inputAddress2" name="txtCant" placeholder="">
            </div>
            <div class="col-md-10">
                <label for="inputState" class="form-label">Tipo de Entrega</label>
                <select id="inputState" class="form-select" name="txtTypeDelivery">
                    <option selected>Seleccione Tipo de Entrega</option>
                    <option>Despacho a Domicilio</option>
                    <option>Retira tu Compra</option>
                </select>
            </div>
            <div class="col-md-10">
                <label for="imagen" class="form-label">Imagen de la Planta</label>
                <input class="form-control" type="file" id="formFileMultiple" name="txtImage" multiple>
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <input  type="submit" value="Agregar" class="btn btn-success" name="btnCrearProduct" id="btnForm">
            </div> 
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./perfil.php" ><button type="button" class="btn btn-success btn btn-dark"> < Volver</button></a>
            </div>  
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>
</html>
