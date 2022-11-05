<?
require '../core/bootstraper.php';
require '../controllers/book_time.controller.php';


$bookController = new bookTimeController($connectDB);
$book = $bookController->listbook();
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/listarblog.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1>Reserva</h1>

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
                <a class="nav-link active" href="../pages/listarbook.php">Listado de Reserva</a>
            </li>
        </ul>

        <form class="row g-3 justify-content-center">
            <table class="styled-table">
                <tr>
                    <td><strong>Dia</strong></td>
                    <td><strong>Hora</strong></td>
                    <td><strong>Nombre</strong></td>
                    <td><strong>Email</strong></td>
                    <td><strong>Telefono</strong></td>
                    <td><strong>Editar</strong></td>


                </tr>
                <tr>
                    <?php
                    for ($i = 0; $i < count($book); $i++) {
                        echo "<tr>";
                        echo "<td>" . $book[$i]->getDia() . "</td>";
                        echo "<td>" . $book[$i]->getHora() . "</td>";
                        echo "<td>" . $book[$i]->getNombre() . "</td>";
                        echo "<td>" . $book[$i]->getEmail() . "</td>";
                        echo "<td>" . $book[$i]->getTelefono() . "</td>";
                        echo "<td><a href='editbook.php?id=" . $book[$i]->getId() . "'>Editar</a></td>";
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