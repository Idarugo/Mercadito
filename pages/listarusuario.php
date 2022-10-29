<?php
   require '../core/bootstraper.php';
   require '../controllers/user.controller.php';
   
   $user = new UserController($connectDB);
   $lista = $user->select($id);
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
                <td><strong>ID</strong></td>
                <td><strong>Nombre</strong></td>
                <td><strong>Correo</strong></td>
                <td><strong>Direccion</strong></td>
                <td><strong>Bloquear</strong></td>
                <td><strong>Eliminar</strong></td>
            </tr>

            <tr>
    
            <?php
                for ($i = 0; $i < count($lista); $i++) {
                $en = $lista[$i];
                echo "<tr>";
                echo "<td>" . $en->getId()  . "</td>";
                echo "<td>" . $en->getNombre()  . "</td>";
                echo "<td>" . $en->getCorreo() . "</td>";
                echo "<td>" . $en->getdireccion() . "</td>";
                echo "<td>" . $en->getEstado() . "</td>";
                echo "<td><a href='listarusuario.php?id=" . $en->getId() ."'> ELIMINAR</a></td>";
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


