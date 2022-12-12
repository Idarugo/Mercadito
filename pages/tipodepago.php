<?php
require '../core/bootstraper.php';
require '../controllers/tipo_envio.controller.php';
require '../controllers/tipo_pago.controller.php';
require '../controllers/detalle_venta_envio.controller.php';
require '../controllers/venta.controller.php';
require '../controllers/comprobante.controller.php';
require '../controllers/direccion.controller.php';

$venta = "";
$direccion = "";
$envio = "";

if (isset($_GET['venta'])) {
    $venta = $_GET['venta'];
} else {
    header("location:  ./carrodecompra.php");
}

$detalleVentaEnvio = new DetalleVentaEnvio($connectDB);
$envio = new TipoDeEnvio($connectDB);

$pago = new TipoDePago($connectDB);

$detalle = $detalleVentaEnvio->selectDetalleVenta($venta);

$direccionUsuario = new Direccion($connectDB);
$direccion = $direccionUsuario->selectDireccion($venta);

$envio = $envio->selectEnvio($venta);
$envioDetalle = new ventaProducto($connectDB);



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/payment.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container-fluid">

        <div class="container container-main gx-5" style="padding-bottom: 30px; padding-top: 30px;">
            <form action="../routes/comprobante.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">

                <?php
                if ($detalle == "") {
                    echo '<a href="../pages/products.php"><img class="img_mensaje" src="../assets/images/categories/no-hay-producto.png"></a>';
                }
                for ($i = 0; $i < count($detalle); $i++) {
                    echo '
                <div class="row md-10">
                    <div class="left col-6">
                        <form action="">

                            <div class="form-group ">
                                <div class="caja">
                                    <div class="">
                                        <div>Contacto <bdo class="derecha">' . $direccion[$i]->getNombre() . '</bdo></div>
                                            <hr size="2px" color="black" />
                                        <div>Método <bdo class="derecha">' . $envio[$i]->getTipo() . '</bdo></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <h5 class="nom-pago">Pago</h5>
                                <h6>Todas las transacciones son seguras y están encriptadas.</h6>
                                <div class="caja">
                                    <div class="">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="opciones" id="entrega1" value="1" disabled>
                                            <label class="form-check-label" for="exampleRadios3">
                                                Mercado Pago
                                            </label>
                                        </div>
                                        <hr size="2px" color="black" />
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="opciones" id="entrega2" value="2" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Transferencia Electrónica
                                            </label>
                                            <h6 style="text-align:center">Nombre: Mercadito </h6>
                                            <h6 style="text-align:center">Rut: 11.365.712-k </h6>
                                            <h6 style="text-align:center">Banco: Banco estado</h6>
                                            <h6 style="text-align:center">Tipo de Cuenta: Cuenta Rut</h6>
                                            <h6 style="text-align:center">Nro: 11365712 </h6>
                                            <h6 style="text-align:center">Correo: nmatias1998@gmail.com </h6>
                                            <h6 style="text-align:center">Muchas gracias por preferirnos!!</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <h5 class="caja-3">Comprobante de pago</h5>
                                <h6>Introduce el comprobante de Trasferencia</h6>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="hidden" class="form-control" id="inputUser" name="txtCodigo" value="' . $detalle[$i]->getCodigo() . '">
                                    </div>
                            
                                    <div class="col-md-12">
                                        <input class="form-control" type="file" id="formFileMultiple" name="txtImagen" multiple>
                                    </div>
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col">
                                    <a href="./plantdetail.php"><button type="button" class="btn btn-outline-secondary">
                                            < Volver a información</button></a>
                                </div>
                                <div class="col-4">
                                    <input type="submit" value="Finalizar el Pedido" class="btn btn-outline-success" name="btnagregarPago" id="btnForm">
                                </div>
                            </div>


                            </div>
                            
                            <div class="right col-6  d-flex">
                        <tbody data-order-summary-section="line-items">
                        <tr class="product" data-product-id="6898364055722" data-variant-id="42969838321921" data-product-type="Árboles" data-customer-ready-visible="">
                        <td class="product__image">
                        <div class="product-thumbnail ">
                        <div class="product-thumbnail__wrapper">
                        <img class="product-thumbnail__image" src="data:imagen/jpg;base64,' . base64_encode($detalle[$i]->getImage()) . '">
                        </div>
                        <span class="product-thumbnail__quantity" aria-hidden="true">' . $detalle[$i]->getCantidad() . ' </span>
                        </div>
                        
                        </td>
                        <th class="product__description" scope="row">
                        <span class="product__description__name order-summary__emphasis"> ' . $detalle[$i]->getTitle() . '</span>
                        </th>
                        <td class="product__quantity">
                        <span class="visually-hidden">
                        2
                                    </span>
                                </td>
                                <td class="product__price">
                                <span class="order-summary__emphasis skeleton-while-loading" style="padding-left: 100px;">$' . $detalle[$i]->getPrice() . ' </span>
                                </td>
                                </tr>
                                </tbody>
                                <td class="product__price">
                                <span class="order-summary__emphasis skeleton-while-loading" name="txtTotal" value="" style="padding-left: 100px;">Total :$' . $detalle[$i]->getTotal() . ' </span>
                                <input type="hidden" class="form-control" id="inputUser" name="txtTotal" value="' . $detalle[$i]->getTotal() . '">

                                </td>
                                </div>
                                </div>
                                
                                
                                ';
                }
                ?>
            </form>
        </div>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>