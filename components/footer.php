<footer class="footer_area">
    <div class="container">
        <div class="row">	
           <div class="col-md-3 col-sm-6">
               <div class="single_ftr">
                   <h4 class="sf_title">INFORMACIÓN</h4>
                   <ul>
                       <li><a href="./info/politicadelrembolso.php">Seguimiento de pedidos</a></li>
                       <li><a href="./info/politicadelrembolso.php">Política de despachos</a></li>
                       <li><a href="./info/contactenos.php">Contáctanos</a></li>
                       <li><a onclick="redirectTo('pages/devoluciones.php')" >Devoluciones</a></li>
                       <li><a href="./info/politicadelrembolso.php">Preguntas Frecuentes</a></li>
                       <li><a href="./info/politicadelrembolso.php">Políticas y Privacidad</a></li>
                       <li><a onclick="redirectTo('pages/info/terminosyservicios.php')">Términos y Servicios</a></li>
                       <li><a onclick="redirectTo('pages/info/politicadelrembolso.php')">Política de rembolso</a></li>
                   </ul>
               </div>
           </div>                       
            <div class="col-md-3 col-sm-6">
                <div class="single_ftr">
                    <h4 class="sf_title">CONTACTO</h4>
                    <ul>
                        <li>Dirección del vivero:Rancagua</li>
                        <li>(+123) 685 78 455 <br> (+064) 336 987 245</li>
                        <li>mercadito@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single_ftr">
                    <h4 class="sf_title">CATEGORÍAS</h4>
                    <ul>
                        <li><a href="#">Plantas de Interior</a></li>
                        <li><a href="#">Plantas de Exterior</a></li>
                        <li><a href="#">Maceteros</a></li>
                        <li><a href="#">Accesorios</a></li>
                        <li><a href="#">Ofertas</a></li>
                        <li><a href="#">Nuevos Productos</a></li>
                        <li><a href="#">Insumos</a></li>
                        <li><a href="#">Flores</a></li>
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
                                <a href="http://webenlance.com" title="facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="http://webenlance.com" title="instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" title="rss"><i class="fa fa-rss"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="copyright_text text-center">© 2022 Todos los derechos reservados Mercadillo</p>
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
<script>
    const redirectTo = (path) => {
        if(location.hostname.includes('localhost')){
            location.assign(`http://www.localhost/Mercadito/${path}`);
        }else{
            location.assign(`${location.hostname}/${path}`);
        } 
    }
</script>