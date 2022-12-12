<?php
require '../core/bootstraper.php';
require '../controllers/tipo_envio.controller.php';
require '../controllers/detalle_venta_envio.controller.php';
require '../controllers/venta.controller.php';
$venta = "";

if (isset($_GET['venta'])) {
    $venta = $_GET['venta'];
} else {
    header("location:  ./carrodecompra.php");
}

$detalleVentaEnvio = new DetalleVentaEnvio($connectDB);
$envio = new TipoDeEnvio($connectDB);

$detalle = $detalleVentaEnvio->selectDetalleVenta($venta);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/shippinginformation.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">

        <div class="container container-main gx-5">
            <form action="../routes/direccion.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">
                <?php
                if ($detalle == "") {
                    echo '<a href="../pages/products.php"><img class="img_mensaje" src="../assets/images/categories/no-hay-producto.png"></a>';
                }
                for ($i = 0; $i < count($detalle); $i++) {
                    echo '
            <div class="row ">
                <div class="left col-6">                    
                        <div class="form-group ">
                            <h5 class="nom-pago">Forma de entrega</h5>
                            <div class="caja">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opciones" id="entrega2"  value="1">

                                        <label class="form-check-label" for="exampleRadios1" name="txtEnviar">
                                           <img class="entrega" src="../assets/images/enviar.png"> Enviar </label>
                                    </div>
                                    <hr size="2px" color="black" />
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opciones" id="entrega1" value="2">
                                        <label class="form-check-label" for="exampleRadios2" name="txtRetirar">
                                        <img class="entrega" src="../assets/images/retirar.png"> Retiro </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </br>

                        <div class="form-group " id="div1" style="display:none">
                            <h5 class="nom-pago">Dirección de envío</h5>
                            <div class="">

                                    <div class="col-md-3">
                                      <input type="hidden" class="form-control" id="inputUser" name="txtCodigo" value="' . $detalle[$i]->getCodigo() . '">
                                    </div>

                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="txtNombre" placeholder="Nombre" aria-label="First name">
                                    </div>
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" id="inputAddress2" name="txtDireccion" placeholder="Direccion">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Comuna" name="txtComuna">
                                </div>
                            </div>
                            </br>
                            <div class="col-12">
                                <input type="text" class="form-control" id="inputAddress2" name="txtTelefono" placeholder="Telefono Celular">
                            </div>
                            </br>

                            <div class="col-12">
                                <input type="text" class="form-control" id="inputAddress2" name="txtObservacion" placeholder="Observacion">
                             </div>

                            </br>
                            <div class="col-12">
                                <h5 class="envio">!! Recuerden todos los miércoles tenemos envios a domicilio!!</h5>
                            </div>
                        </div>

                        </br>

                        <div class="form-group" id="div2" style="display:none">
                            <h5 class="nom-pago">Lugar de retiro</h5>
                            <div class="caja">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            La Rubiana 319, Rancagua
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        </br>
                        <div class="row">
                            <div class="col-4">
                                <input  type="submit" value="Finalizar el Pedido" class="btn btn-outline-success" name="btnagregarDireecion" id="btnForm">
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
                    <td class="product__price col-6">
                        <span class="order-summary__emphasis skeleton-while-loading" style="padding-left: 100px;">Total :$' . $detalle[$i]->getTotal() . ' </span>
                    </td>
                </div>
            </div>

            ';
                }
                ?>
            </form>
        </div>

        <script>
            $(document).ready(function() {
                $("#entrega1").click(function() {
                    $("#div1").hide();
                    $("#div2").show();

                });

                $("#entrega2").click(function() {
                    $("#div1").show();
                    $("#div2").hide();

                });
            });
        </script>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>