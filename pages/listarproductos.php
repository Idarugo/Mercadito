<?
require '../core/bootstraper.php';
require '../controllers/plant.controller.php';

$producController = new PlantController($connectDB);
$produc = $producController->select();
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

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../pages/listarproductos.php">Lista de Producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listarblog.php">Lista de Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listarusuario.php">Lista de Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listimages.php">Lista de Foto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/listarbook.php">Listado de Reserva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/shoppinglistadm.php">Listado de Compra</a>
            </li>
        </ul>

        <form class="row g-3 justify-content-center">
            <table class="styled-table">
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td><strong>Precio</strong></td>
                    <td><strong>Descripcion</strong></td>
                    <td><strong>Cantidad</strong></td>
                    <td><strong>Categoria</strong></td>
                    <td><strong>Opciones</strong></td>

                </tr>

                <tr>
                    <?php
                    for ($i = 0; $i < count($produc); $i++) {
                        echo "<tr>";
                        echo "<td>" . $produc[$i]->geTitle()  . "</td>";
                        echo "<td>" . $produc[$i]->getPrice() . "</td>";
                        echo "<td>" . $produc[$i]->getDescription() . "</td>";
                        echo "<td>" . $produc[$i]->getCant() . "</td>";
                        echo "<td>" . $produc[$i]->getCategory() . "</td>";
                        echo "<td><a href='modificarproducto.php?id=" . $produc[$i]->getidPlants() . "'>Editar</a> - <a href='../routes/plant.routes.php?btnElminarPlant=" . $produc[$i]->getidPlants() . "'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./agregarproductos.php"><button type="button" class="btn btn-success">Agregar Producto</button></a>
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