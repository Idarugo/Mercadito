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
}
