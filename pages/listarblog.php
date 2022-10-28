<?
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
       <h1>Listado De Blog</h1>
       <form class="row g-3 justify-content-center"> 
        <table class="styled-table">
            <tr>
                <td><strong>Imagen</strong></td>
                <td><strong>Titulo</strong></td>
                <td><strong>Detalle</strong></td>
                <td><strong>Fecha</strong></td>
                <td><strong>Eliminar</strong></td>
                <td><strong>Modificar</strong></td>
            </tr>

            <tr>
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


