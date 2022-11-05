<?php
require '../models/Category.php';

class CategoryController
{

  private $connectDB;

  function __construct($connectDB)
  {
    $this->connectDB = $connectDB;
  }

  public function ListCategory()
  {
    $lista = array();
    $this->connectDB->connect();
    $sql = "select * from `category` ORDER BY `id` ASC ";
    $st = $this->connectDB->query($sql);
    while ($rs = mysqli_fetch_array($st)) {
      $id = $rs['id'];
      $name = $rs['category'];
      $banner = $rs['image_category'];
      $c   = new Category($id, $banner, $name);
      $lista[] = $c;
    }
    $this->connectDB->disconnect();
    return $lista;
  }

  public function updateCategory($id, $name)
  {
    $this->connectDB->connect();
    $sql = "UPDATE `category` SET `category`='$name' WHERE `id`='$id'";
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
