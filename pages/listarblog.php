<?
require '../core/bootstraper.php';
require '../controllers/blog.controller.php';


$blogController = new BlogController($connectDB);
$blog = $blogController->listblog();
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/listarblog.css">
    <script async="" src="//cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-65cd0ba3fcd81a1df33f2510ec5bcf8c0e0958653b50e3965ec972dd638ee13f.js"></script>
    <script async="" src="https://cdn.shopify.com/shopifycloud/web-pixels-manager/0.0.172/browser.modern.js"></script>
    <meta http-equiv="origin-trial" content="A751Xsk4ZW3DVQ8WZng2Dk5s3YzAyqncTzgv+VaE6wavgTY0QHkDvUTET1o7HanhuJO8lgv1Vvc88Ij78W1FIAAAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjgwNjUyNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion/376039264/?random=1667755210531&amp;cv=11&amp;fst=1667755210531&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=2oab20&amp;u_w=1440&amp;u_h=900&amp;label=sxOVCLSYoo0CEODOp7MB&amp;tiba=Pago%20-%20PlantMe%20Chile%20-%20Pantalla%20de%20pago&amp;hn=www.googleadservices.com&amp;frm=0&amp;url=https%3A%2F%2Fplantme.cl%2F4253745198%2Fcheckouts%2Fb3bfdf88a2c973d12e16021dd791dae4%3Fprevious_step%3Dcontact_information%26step%3Dpayment_method&amp;ref=https%3A%2F%2Fplantme.cl%2F&amp;capi=2&amp;gtm_ee=1&amp;auid=1387421761.1667755183&amp;data=event%3Dpage_view%3Bpage_path%3D%2Fcheckout%2Fpayment&amp;rfmt=3&amp;fmt=4"></script>
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1>Blog</h1>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../pages/listarproductos.php">Lista de Producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../pages/listarblog.php">Lista de Blog</a>
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
                    <td><strong>Titulo</strong></td>
                    <td><strong>Detalle</strong></td>
                    <td><strong>Fecha</strong></td>
                    <td><strong>Editar</strong></td>
                </tr>
                <tr>
                    <?php
                    for ($i = 0; $i < count($blog); $i++) {
                        echo "<tr>";
                        echo "<td>" . $blog[$i]->getNombre() . "</td>";
                        echo "<td>" . $blog[$i]->getDetalle() . "</td>";
                        echo "<td>" . $blog[$i]->getFecha() . "</td>";
                        echo "<td><a href='editblog.php?id=" . $blog[$i]->getId() . "'>Editar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./agregarblog.php"><button type="button" class="btn btn-success">Agregar Blog</button></a>
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