<?php
require dirname(__DIR__) . '/models/Usuario.php';
session_start();
$login = false;
$isAdmin = false;
if (isset($_SESSION['user'])) {
    $login = true;
    $user = $_SESSION['user'];
    if ($_SESSION['user']->getRol() == '1') $isAdmin = true;
}
?>


<header>
    <ul class="header__menu">
        <li onclick="redirectTo('pages/tiendaonline.php')" class="header__menu-item">Tienda Online</li>
        <li onclick="redirectTo('pages/nuestrojardin.php')" class="header__menu-item">Nuestro Jardin</li>
        <li onclick="redirectTo('pages/blog.php')" class="header__menu-item">Blog</li>
        <div onclick="redirectTo('./index.php')" class="header__logo"></div>
        <li onclick="redirectTo('pages/nosotros.php')" class="header__menu-item">Nosotros</li>
        <li onclick="redirectTo('pages/servicio.php')" class="header__menu-item">Servicios</li>
        <li onclick="redirectTo('pages/contactenos.php')" class="header__menu-item">Contactanos</li>
        <div class="header__icon">
            <?php
            if (!$login) {
                echo

                '  <a href="pages/login.php"> <li class="header__menu-item"></li></a>';
            } else {
                echo $user->getNombre();
                echo '  <a href="./pages/perfil.php"> <li class="header__menu-item"></li></a>';
                echo '<a href="./routes/auth.routes.php?logout">Salir</a>';
            }
            ?>
            <div class="header__carrocompra">
                <li type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" class="header__menu-item"></li>
            </div>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Carrito de compra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                Su carrito actualmente está vacío.
            </div>
        </div>

    </ul>
</header>