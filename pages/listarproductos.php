<?php
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
                <a class="nav-link " href="../pages/listadoReserva.php">Listado de Reserva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listadoCompra.php">Listado de Compra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listadoreporte.php">Reportes</a>
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
                        echo "<td><a href='modificarproducto.php?id=" . $produc[$i]->getidPlants() . "'>Editar</a> - 
                        <a type='button' class='btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Eliminar</a></td>";
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

    <?php
    for ($i = 0; $i < count($image); $i++) {
        echo '
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Imagen</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Está seguro de que desea eliminar Imagen del producto?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">
                                        <a href="../routes/plant.routes.php?btnElminarPlante=' .   $produc[$i]->getId() . '"> Eliminar </a>
                                    </button>
                                </div>
                            </div>
                            </div>
                            ';
    }
    ?>

    <?php include '../components/footer.php' ?>
</body>

</html>