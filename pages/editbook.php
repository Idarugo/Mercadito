<?php
require '../core/bootstraper.php';
require '../controllers/book_time.controller.php';

if (!isset($_GET['id'])) {
    header("location:  ./listarbook.php");
}
$book = new bookTimeController($connectDB);
$BookById = $book->getBookById($_GET['id']);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/editblog.css">
</head>

<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1 style="text-align: center;">Editar Reserva</h1>

        <form action="../routes/book.routes.php" method="POST" class="row g-3 justify-content-center" enctype="multipart/form-data">

            <div class="col-md-12">
                <input type="hidden" class="form-control" id="inputId" name="txtId" value="<?php echo $BookById->getId(); ?>">
            </div>

            <div class="col-md-5">
                <label for="inputDate" class="form-label">Dia</label>
                <input type="date" class="form-control" id="inputDate" name="txtDia" value="<?php echo $BookById->getDia(); ?>">
            </div>

            <div class="col-md-5">
                <label for="inputTime" class="form-label">Hora</label>
                <input type="time" class="form-control" id="inputTime" name="txtHora" value="<?php echo $BookById->getHora(); ?>">
            </div>

            <div class="col-md-5">
                <label for="inputName" class="form-label">Nombre</label>
                <input type="name" class="form-control" id="inputName" name="txtNombre" value="<?php echo $BookById->getNombre(); ?>">
            </div>

            <div class="col-md-5">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="txtEmail" value="<?php echo $BookById->getEmail(); ?>">
            </div>

            <div class="col-md-10">
                <label for="inputPhone" class="form-label">Telefono</label>
                <input type="phone" class="form-control" id="inputPhone" name="txtTelefono" value="<?php echo $BookById->getTelefono(); ?>">
            </div>

            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <input type="submit" value="Modificar" class="btn btn-success" name="btnModificarBook" id="btnForm">
            </div>

            <div class="col-5  justify-content-center mb-2" style="text-align: center;">
                <a href="./listadoReserva.php"><button type="button" class="btn btn-success btn btn-dark">
                        < Volver</button></a>
            </div>
        </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>

</html>