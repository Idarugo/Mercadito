<?php
require '../models/ShoppingCarro.php';

class ShoppingCarrito
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function selectShopping()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "SELECT shopping_cant.id, users, plants.image as imagen, plants.title as titulo, plants.price as precio,plants.cant as cantidad, quantity FROM shopping_cant , plants WHERE shopping_cant.plants=plants.id AND shopping_cant.plants=plants.id AND shopping_cant.plants=plants.id AND shopping_cant.plants=plants.id ORDER BY `id` ASC        ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $lista  = new ShoppingCarro($rs['id'], $rs['users'], $rs['imagen'], $rs['titulo'], $rs['precio'], $rs['cantidad'], $rs['quantity']);;
        }
        $this->connectDB->disconnect();
        return $lista;
    }
}
