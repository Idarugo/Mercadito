<?php
   require '../core/bootstraper.php';
   require '../controllers/user.controller.php';
   
   $userController = new UserController($connectDB);
   $lista = $userController->select();
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
    
            <?php
                for ($i = 0; $i < count($lista); $i++) {
                echo "<tr>";
                echo "<td>" . $lista[$i]->getNombre()  . "</td>";
                echo "<td>" . $lista[$i]->getCorreo() . "</td>";
                echo "<td>" . $lista[$i]->getdireccion() . "</td>";
                echo "<td>" . $lista[$i]->getEstado() . "</td>";
                echo "<td><a href='listarusuario.php?id=" . $lista[$i]->getId() ."'> ELIMINAR</a></td>";
                echo "</tr>";
                }
            ?>

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


