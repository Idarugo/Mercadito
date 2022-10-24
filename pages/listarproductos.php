<?
        $plantsList = $_SESSION['plants'];
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/listarproductos.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
       <h1>Productos</h1>
       <form class="row g-3 justify-content-center"> 
        <table class="styled-table">
            <tr>
                <td><strong>Nombre</strong></td>
                <td><strong>Categoria</strong></td>
                <td><strong>Descripcion</strong></td>
                <td><strong>Precio</strong></td>
                <td><strong>Cantidad</strong></td>
                <td><strong>Tipo de Entrega</strong></td>
                <td><strong>Imagen</strong></td>
                <td><strong>Editar</strong></td>
                <td><strong>Eliminar</strong></td>

            </tr>

            <tr>
            <?php
                for($i = 0; $i < count($plantsList); $i++){
                    echo "
                    <div class='local__bus-item' id='clickTemp'>
                    <section class='local__info'>
                        <h6>".$plantsList[$i]->geTitle()."</h6>
                        <p>".$plantsList[$i]->getPrice()."</p>
                        <p>".$plantsList[$i]->getDescription()."</p>
                        <p>".$plantsList[$i]->getImage()."</p>
                        <p>".$plantsList[$i]->getCant()."</p>
                        <p>".$plantsList[$i]->getCategory()."</p>
                        <p>".$plantsList[$i]->getTypeDelivery()."</p>
                        <p ".$plantsList[$i]->getidPlants().">Editar</p>
                        <p ".$plantsList[$i]->getidPlants().">ELIMINAR</p>

                    </section>
                </div> ";
                }        
            ?>
            </tr>
        </table>
         <div class="col-5  justify-content-center mb-2" style="text-align: center;">
             <a href="./agregarproductos.php" ><button type="button" class="btn btn-success">Agregar Producto</button></a>
         </div>  
         <div class="col-5  justify-content-center mb-2" style="text-align: center;">
             <a href="./perfil.php" ><button type="button" class="btn btn-success btn btn-dark"> < Volver</button></a>
         </div> 
       </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>
</html>


