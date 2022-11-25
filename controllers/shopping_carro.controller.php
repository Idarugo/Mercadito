<?php
require '../models/ShoppingCarro.php';

class ShoppingCarrito
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function selectShopping($users)
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT shopping_cant.id, users, plants.image as imagen, plants.title as titulo, plants.price as precio,plants.cant as cantidad, quantity FROM shopping_cant , plants WHERE shopping_cant.plants=plants.id AND shopping_cant.plants=plants.id AND shopping_cant.plants=plants.id AND shopping_cant.plants=plants.id AND `users`= $users ORDER BY `id` ASC        ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista[] = new ShoppingCarro($rs['id'], $rs['users'], $rs['imagen'], $rs['titulo'], $rs['precio'], $rs['cantidad'], $rs['quantity']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }

    public function registerShopping($user, $plant, $cant)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `shopping_cant`(`users`, `plants`, `quantity`) VALUES ('$user','$plant','$cant')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/carrodecompra.php?created");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/plantdetail.php?RegisterError");
        return;
    }

    public function removeProducto($id)
    {
        $this->connectDB->connect();
        $sql = "DELETE FROM shopping_cant WHERE id = $id";
        $st = $this->connectDB->query($sql);
        $this->connectDB->disconnect();
        header("location:  ../pages/carrodecompra.php?removedCarro");
        return;
    }
}
