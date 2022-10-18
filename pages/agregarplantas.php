<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../components/head.php' ?>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/pages/agregarplantas.css">
    <link rel="stylesheet" href="../assets/styles/components/forms.css">
</head>
<body>
    <?php include '../components/header.php' ?>
    <div class="container container-main">
        <h1 class="text-principal" style="text-align:center">Agregar Producto</h1>

           <form class="caja-agregarplanta">
            <label for="nombre">Nombre del producto</label>
            <input type="text" placeholder="Nombre">
            <label for="lang">Categoria</label>
            <select name="categoria" class="menu">
                <option value="1">Plantas de Interior</option>
                <option value="2">Plantas de Exterior</option>
                <option value="3">Plantas Medicinales</option>
                <option value="4">Maceteros</option>
                <option value="5">Accesorios</option>
                <option value="6">Ofertas</option>
                <option value="7">Nuevos Productos</option>
                <option value="8">Insumos</option>
            </select>
            <label for="descripcion">Descripcion</label>
            <textarea placeholder="Descripcion" class="cajatexto"></textarea>
            <label for="precio">Precio</label>
            <input type="precio" placeholder="Precio">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="numero">

            <label for="lang">Tipo de Entrega</label>
            <select name="entrega" class="menu">
                <option value="1">Despacho a Domicilio</option>
                <option value="2">Retira tu Compra</option>
            </select>
            <label for="imagen">Imagen de la Planta</label>
            <input type="imagen" placeholder="Imagen de la planta">
            <input class="submit" name="submit" type="submit" value="Guardar">
          </form>
    </div>
    <?php include '../components/footer.php' ?>
</body>
</html>


