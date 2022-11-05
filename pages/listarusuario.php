<?php
require '../core/bootstraper.php';
require '../controllers/user.controller.php';

$userController = new UserController($connectDB);
$lista = $userController->Userlist();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/listarusuario.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1>Usuarios</h1>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../pages/listarproductos.php">Lista de Producto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listarblog.php">Lista de Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../pages/listarusuario.php">Lista de Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/listimages.php">Lista de Foto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/listarbook.php">Listado de Reserva</a>
            </li>
        </ul>

        <form class="row g-3 justify-content-center">
            <table class="styled-table table table-hover">
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td><strong>Correo</strong></td>
                    <td><strong>Direccion</strong></td>
                    <td><strong>Bloquear</strong></td>
                    <td><strong>Eliminar</strong></td>
                </tr>

                <tr>

                    <?php
                    for ($i = 0; $i < count($lista); $i++) {
                        echo "<tr>";
                        echo "<td>" . $lista[$i]->getNombre()  . "</td>";
                        echo "<td>" . $lista[$i]->getCorreo() . "</td>";
                        echo "<td>" . $lista[$i]->getdireccion() . "</td>";
                        echo "<td>" . $lista[$i]->getEstado() . "</td>";
                        echo "<td><a href='../routes/user.routes.php?btnElminarUsu=" . $lista[$i]->getId() . "'>Eliminar</a></td>";
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