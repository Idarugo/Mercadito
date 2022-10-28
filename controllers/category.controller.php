<?php
    require '../models/Category.php';

    class PlantController {
    
        private $connectDB;

        function __construct( $connectDB)
        {
            $this->connectDB = $connectDB;
        }

        public function ListarCategory(){
            $lista = array();
            $this->connectDB->connect();
             $sql = "select * from `category` ORDER BY `id` ASC ";
            $this->connectDB->disconnect();
             $st = $this->mi->query($sql);
            while ($rs = mysqli_fetch_array($st)) {
              $id = $rs['id'];
              $category = $rs['category'];
              $c   = new Category($id,$category);
              $lista[] = $c;
            }
            $this->connectDB->disconnect();
            return $lista;
          }

    } 