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

            <div class="row md-10">
                <div class="left col-6">
                    <form action="">

                        <div class="form-group ">
                            <div class="caja">
                                <div class="">
                                    <div>Contacto <bdo class="derecha">' . $infoplant->getCant() . '</bdo> <button class="button" style="float: right;">Cambiar</button></div>
                                    <hr size="2px" color="black" />
                                    <div>Método <bdo class="derecha">' . $infoplant->getCant() . '</bdo> <button class="button" style="float: right;">Cambiar</button></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <h5 class="nom-pago">Pago</h5>
                            <h6>Todas las transacciones son seguras y están encriptadas.</h6>
                            <div class="caja">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                        <label class="form-check-label" for="exampleRadios3">
                                            Mercado Pago
                                        </label>
                                    </div>
                                    <hr size="2px" color="black" />
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Transferencia Electrónica
                                        </label>
                                        <p style="text-align:center">Nombre: Mercadito </p>
                                        <p style="text-align:center">Rut: 11.365.712-k </p>
                                        <p style="text-align:center">Banco: Banco estado</p>
                                        <p style="text-align:center">Tipo de Cuenta: Cuenta Rut</p>
                                        <p style="text-align:center">Nro: 11365712 </p>
                                        <p style="text-align:center">Correo: nmatias1998@gmail.con </p>
                                        <p style="text-align:center">Muchas gracias por preferirnos!!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <h5 class="caja-3">Dirección de facturación</h5>
                            <h6>Introduce la dirección que coincida con tu tarjeta o forma de pago.</h6>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Nombre" aria-label="First name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="col-12">
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Direccion">
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Casa" aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Comuna" aria-label="Last name">
                            </div>
                        </div>
                        </br>
                        <div class="col-12">
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Telefono Celular">
                        </div>
                        </br>
                        <div class="row">
                            <div class="col">
                                <a href="./plantdetail.php"><button type="button" class="btn btn-outline-secondary">
                                        < Volver a información</button></a>
                            </div>
                            <div class="col-4">
                                <a href="./confirmedorder.php"><button type="button" class="btn btn-outline-success">Finalizar el Pedido</button></a>
                            </div>
                        </div>


                    </form>
                </div>

                <div class="right col-6  d-flex">
                    <tbody data-order-summary-section="line-items">
                        <tr class="product" data-product-id="6898364055722" data-variant-id="42969838321921" data-product-type="Árboles" data-customer-ready-visible="">
                            <td class="product__image">
                                <div class="product-thumbnail ">
                                    <div class="product-thumbnail__wrapper">
                                        <img class="product-thumbnail__image" src="data:imagen/jpg;base64,' . base64_encode($infoplant->getImage()) . '">
                                    </div>
                                    <span class="product-thumbnail__quantity" aria-hidden="true">' . $infoplant->getCant() . ' </span>
                                </div>

                            </td>
                            <th class="product__description" scope="row">
                                <span class="product__description__name order-summary__emphasis">' . $infoplant->geTitle() . ' - ' . $infoplant->getDescription() . ' </span>
                            </th>
                            <td class="product__quantity">
                                <span class="visually-hidden">
                                    2
                                </span>
                            </td>
                            <td class="product__price">
                                <span class="order-summary__emphasis skeleton-while-loading" style="padding-left: 200px;">$' . $infoplant->getPrice() . ' </span>
                            </td>
                        </tr>
                    </tbody>
                </div>
            </div>


        </div>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>