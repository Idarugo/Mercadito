<?php
    require '../models/Category.php';

    class CategoryController {
    
        private $connectDB;

        function __construct( $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function ListarCategory(){
            $lista = array();
            $this->connectDB->connect();
             $sql = "select * from `category` ORDER BY `id` ASC ";
             $st = $this->connectDB->query($sql);
            while ($rs = mysqli_fetch_array($st)) {
              $id = $rs['id'];
              $name = $rs['category'];
              $c   = new Category($id,$name);
              $lista[] = $c;
            }
            session_start();
            $_SESSION['categories'] = $lista;
            $this->connectDB->disconnect();
            return;
          }

    } 