<footer class="footer_area">
    <?php include __DIR__ . '/whatsapp.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single_ftr">
                    <h4 class="sf_title">INFORMACIÓN</h4>
                    <ul>
                        <li><a onclick="redirectTo('pages/info/seguimientodepedido.php')">Seguimiento de pedidos</a></li>
                        <li><a onclick="redirectTo('pages/info/politicadedespachos.php')">Política de despachos</a></li>
                        <li><a onclick="redirectTo('pages/contactenos.php')">Contáctanos</a></li>
                        <li><a onclick="redirectTo('pages/devoluciones.php')">Devoluciones</a></li>
                        <li><a onclick="redirectTo('pages/info/preguntasfrecuentes.php')">Preguntas Frecuentes</a></li>
                        <li><a onclick="redirectTo('pages/info/politicasyprivacidad.php')">Políticas y Privacidad</a></li>
                        <li><a onclick="redirectTo('pages/info/terminosyservicios.php')">Términos y Servicios</a></li>
                        <li><a onclick="redirectTo('pages/info/politicadelrembolso.php')">Política de rembolso</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single_ftr">
                    <h4 class="sf_title">CONTACTO</h4>
                    <ul>
                        <li>Dirección del Vivero: La Rubina 3919 </li>
                        <li>(+569) 99 066 039 </li>
                        <li>mercadito.jesica@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single_ftr">
                    <h4 class="sf_title">CATEGORÍAS</h4>
                    <ul>
                        <li><a onclick="redirectTo('pages/products.php?category=1')">Plantas de Interior</a></li>
                        <li><a onclick="redirectTo('pages/products.php?category=2')">Plantas de Exterior</a></li>
                        <li><a onclick="redirectTo('pages/products.php?category=3')">Plantas Medicinales</a></li>
                        <li><a onclick="redirectTo('pages/products.php?category=4')">Frutas y Verduras</a></li>
                        <li><a onclick="redirectTo('pages/products.php?category=5')">Acessorios</a></li>
                        <li><a onclick="redirectTo('pages/products.php?category=6')">Ofertas</a></li>
                        <li><a onclick="redirectTo('pages/products.php?category=7')">Nuevos Productos</a></li>
                        <li><a onclick="redirectTo('pages/products.php?category=8')">Insumos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single_ftr">
                    <h4 class="sf_title">¡REGÍSTRATE Y RECIBE INFORMACIÓN!</h4>
                    <div class="newsletter_form">
                        <p>Agrega tu correo y recibe las mejores promociones, novedades y noticias.</p>
                        <form method="post" class="form-inline">
                            <input name="EMAIL" id="email" placeholder="Suscríbete a nuestra lista de correo" class="form-control" type="email">
                            <button type="submit" class="btn btn-default" title="search">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ftr_btm_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="ftr_social_icon">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100063554051438" title="facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/mercadito_jessicamoreno" title="instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" title="linkedin"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" title="rss"><i class="fa fa-rss"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="copyright_text text-center">© 2022 Todos los derechos reservados Mercadito</p>
                </div>
                <div class="col-sm-4">
                    <div class="payment_mthd_icon text-right">
                        <ul>
                            <li><i class="fa fa-cc-paypal"></i></li>
                            <li><i class="fa fa-cc-visa"></i></li>
                            <li><i class="fa fa-cc-discover"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-amex"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php include __DIR__ . "/scripts.php"; ?>