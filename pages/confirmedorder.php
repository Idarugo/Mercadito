<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/confirmedorder.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container-fluid">

        <div class="container container-main gx-5" style="padding-bottom: 30px; padding-top: 30px;">

            <div class="row md-10">
                <div class="left col-6">
                    <form action="">

                        <div class="form-group ">
                            <img class="icon-verificado" src="../assets/images/verificado.png">
                            <h5 style="padding-left: 50px;">Pedido #id</h5>
                            <h4 style="padding-left: 50px;">Gracias nombre!</h4>
                        </div>

                        </br>

                        <div class="form-group ">
                            <div class="caja">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6604.393667992853!2d-70.772194!3d-34.141306!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scl!4v1667779652932!5m2!1ses!2scl" width="571" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <hr size="2px" color="black" />
                                <h5 class="caja-3">Tu pedido está confirmado</h5>
                                <h6>Recibirás un correo electrónico cuando tu pedido esté listo para ser retirado.</h6>
                                <hr size="2px" color="black" />

                                <body style="text-align:left">Nombre: Mercadito <br>
                                    Rut: 11.365.712-k <br>
                                    Banco: Banco estado <br>
                                    Tipo de Cuenta: Cuenta Rut <br>
                                    Nro: 11365712 <br>
                                    Correo: nmatias1998@gmail.con <br>
                                    Muchas gracias por preferirnos!! <br>
                                </body>
                            </div>
                        </div>

                        </br>

                        <div class="form-group ">
                            <div class="caja">
                                <h5 class="caja-3">Actualizaciones del pedido</h5>
                                <h6>Recibirás actualizaciones del envío y entrega de tu pedido por correo electrónico.</h6>
                            </div>
                        </div>

                        </br>

                        <div class="form-group ">
                            <div class="caja">
                                <h5 class="caja-3">Información del cliente</h5>
                                <div class="row">
                                    <div class="col">
                                        <h6>Información de contacto</h6>
                                        <p>Correo</p>

                                        <h6>Lugar de retiro</h6>

                                        <body>La Rubina 3919 <br>
                                            Ramcagua<br>
                                            Chile<br>
                                            +56999066039<br>
                                        </body>
                                    </div>

                                    <div class="col">
                                        <h6>Metodo de pago</h6>
                                        <p>Transferencia Electrónica - $</p>

                                        <h6>Dirección de facturación</h6>
                                        <span>Nombre</span>
                                        </br>
                                        <span>Correo</span>
                                        </br>
                                        <span>Casa</span>
                                        </br>
                                        <span>Comuna</span>
                                        </br>
                                        <span>Telefono</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </br>

                        <div class="row">
                            <div class="col">

                            </div>
                            <div class="col-4">
                                <a href="./tiendaonline.php"><button type="button" class="btn btn-outline-success">Seguir Comprando</button></a>
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