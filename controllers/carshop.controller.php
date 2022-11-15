<?php
require '../models/Carshop.php';

class CarshopController
{

    private $connectDB;

    function __construct($connectDB)
    {
        $this->connectDB = $connectDB;
    }

    public function registerCarshop($name, $amount, $price, $subtotal)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `carshop`(`name`, `amount`, `price` , `subtotal`) VALUES ('$name','$amount','$price','$subtotal')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/shippinginformation.php?created");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/carrodecompra.php?RegisterError");
        return;
    }


    /*

    public function registerShipping($users, $name, $amount, $price, $delivery, $address, $commune, $phone)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `carshop`( `users`, `name`, `amount`, `price`, `delivery`, `address`, `commune`, `phone`) VALUES ('$users','$name','$amount','$price','$delivery','$address','$commune','$phone')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/payment.php?created");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/shippinginformation.php?RegisterError");
        return;
    }

    public function registerPayment($users, $address, $commune, $phone)
    {
        $this->connectDB->connect();
        $sql = "INSERT INTO `carshop`( `users`, `address`, `commune`, `phone`) VALUES ('$users','$address','$commune','$phone')";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            $this->connectDB->disconnect();
            header("location:  ../pages/confirmedorder.php?created");
            return;
        }
        $this->connectDB->disconnect();
        header("location:  ../pages/payment.php?RegisterError");
        return;
    }
    

    public function ListCarshop()
    {
        $lista = array();
        $this->connectDB->connect();
        $sql = "select * from `carshop` ORDER BY `id` ASC ";
        $st = $this->connectDB->query($sql);
        while ($rs = mysqli_fetch_array($st)) {
            $id = $rs['id'];
            $users = $rs['users'];
            $amount = $rs['amount'];
            $price = $rs['price'];
            $amount = $rs['amount'];
            $amount = $rs['amount'];
            $amount = $rs['amount'];

            $c   = new Category($id, $users, $amount, $price,);
            $lista[] = $c;
        }
        $this->connectDB->disconnect();
        return $lista;
    }
 
  
 */

    public function updateCarshop($id, $users, $name, $amount, $price, $delivery, $billing)

    {
        $this->connectDB->connect();
        $sql = "UPDATE `carshop` SET `users`='$users',`name`='$name',`amount`='$amount',`price`='$price',`delivery`='$delivery',`billing`='$billing' WHERE `id`='$id'";
        $this->connectDB->query($sql);
        if ($this->connectDB->getDB()->affected_rows) {
            session_start();
            session_unset();
            session_destroy();
            $this->connectDB->disconnect();
            header("location:  ../pages/listarproductos.php?edited");
            return;
        }
        $this->connectDB->disconnect();
        //header("location:  ../pages/modificarusuario.php?ModifiedError");
        return;
    }
}