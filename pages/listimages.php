<?
require '../core/bootstraper.php';
require '../controllers/image_plants.controller.php';

$imageController = new ImageController($connectDB);
$image = $imageController->listimages();
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/listarblog.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1>Imágenes de productos</h1>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../pages/listarproductos.php">Lista de Producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listarblog.php">Lista de Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listarusuario.php">Lista de Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/listimages.php">Lista de Foto</a>
            </li>
        </ul>

        <form class="row g-3 justify-content-center">
            <table class="styled-table">
                <tr>
                    <td><strong>Producto</strong></td>
                    <td><strong>Imagen 1</strong></td>
                    <td><strong>Imagen 2</strong></td>
                    <td><strong>Imagen 3</strong></td>
                    <td><strong>Imagen 4</strong></td>
                    <td><strong>Imagen 5</strong></td>
                    <td><strong>Opciones</strong></td>


                </tr>
                <tr>
                    <?php
                    for ($i = 0; $i < count($image); $i++) {
                        echo "<tr>";
                        echo "<td>" . $image[$i]->getPlants() . "</td>";
                        echo "<td>" . $image[$i]->getImage1() . "</td>";
                        echo "<td>" . $image[$i]->getImage2() . "</td>";
                        echo "<td>" . $image[$i]->getImage3() . "</td>";
                        echo "<td>" . $image[$i]->getImage4() . "</td>";
                        echo "<td>" . $image[$i]->getImage5() . "</td>";
                        echo "<td><a href='editimages.php?id=" . $image[$i]->getId() . "'>Editar</a> -
                                <a href='../routes/image.routes.php?btnElminarImage=" . $image[$i]->getId() . "'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./addproductimages.php"><button type="button" class="btn btn-success">Agregar Imagenes</button></a>
            </div>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./perfil.php"><button type="button" class="btn btn-success btn btn-dark">
                        < Volver</button></a>
            </div>
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>