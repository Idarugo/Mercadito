<?
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
       <h1>Listado De Usuarios</h1>
       <form class="row g-3 justify-content-center"> 
        <table class="styled-table">
            <tr>
                <td><strong>Nombre</strong></td>
                <td><strong>Correo</strong></td>
                <td><strong>Direccion</strong></td>
                <td><strong>Bloquear</strong></td>
                <td><strong>Eliminar</strong></td>
            </tr>

            <tr>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                 <label class="form-check-label" for="flexSwitchCheckDefault">Bloquear</label>
            </div>
            </tr>
        </table>
         <div class="col-5  justify-content-center mb-2" style="text-align: center;">
             <a href="./perfil.php" ><button type="button" class="btn btn-success btn btn-dark"> < Volver</button></a>
         </div> 
       </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>
</html>


