<?php
require '../models/ShoppingCant.php';

class ShoppingCarrito
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }


    public function registerShopping($user, $plant, $cant)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `shopping_cant`(`users`, `plants`, `quantity`) VALUES ('$user','$plant','$cant')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/carrodecompra.php?user=$user");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/tiendaonline.php?RegisterError");
        return;
    }
}
