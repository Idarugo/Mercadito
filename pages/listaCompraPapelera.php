<?php
require '../core/bootstraper.php';
require '../controllers/ventaDetalle.controller.php';

$ventaController = new ventaDetalle($connectDB);
$venta = $ventaController->listVenta();

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/shoppinglistadm.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1>Compra</h1>

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
                <a class="nav-link" href="../pages/listimages.php">Lista de Foto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listadoReserva.php">Listado de Reserva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listadoCompra.php">Listado de Compra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../pages/listaCompraPapelera.php">Papelera de Compra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listadoreporte.php">Reportes</a>
            </li>
        </ul>

        <form class="row g-3 justify-content-center">
            <table class="styled-table">
                <tr>
                    <td><strong>Producto</strong></td>
                    <td><strong>Cantidad</strong></td>
                    <td><strong>Nombre</strong></td>
                    <td><strong>Total</strong></td>
                    <td><strong>TIpo de Envio</strong></td>
                    <td><strong>Tipo de Pago</strong></td>
                    <td><strong>Comprobante de Pago</strong></td>


                </tr>
                <tr>
                    <?php
                    for ($i = 0; $i < count($venta); $i++) {
                        echo "<tr>";
                        echo "<td>" . $venta[$i]->getUsuario() . "</td>";
                        echo "<td>" . $venta[$i]->getCodigo() . "</td>";
                        echo "<td>" . $venta[$i]->getTotal() . "</td>";
                        echo "<td>" . $venta[$i]->getTipoEnvio() . "</td>";
                        echo "<td>" . $venta[$i]->getTipoPago() . "</td>";
                        echo "<td>" . $venta[$i]->getTipoPago() . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./perfil.php"><button type="button" class="btn btn-success btn btn-dark">
                        < Volver</button></a>
            </div>
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>