<?php
    require '../models/Blog.php';

    class BlogController {
    
        private $connectDB;

        function __construct( $connectDB)
        {
            $this->connectDB = $connectDB;
        }


        public function register($imagen,$nombre,$detalle,$fecha){
             $this->connectDB->connect();
             $sql = "INSERT INTO `blog`(`imagen`, `name`, `detail`, `date`) VALUES ('$imagen','$nombre','$detalle','$fecha')";
             $this->connectDB->query($sql);
             if($this->connectDB->getDB()->affected_rows){
                 $this->connectDB->disconnect();
                 header("location:  ../pages/agregarblog.php?created");
                 return;
             }
             $this->connectDB->disconnect();
             header("location:  ../pages/agregarblog.php?RegisterError");
             return;
         }

         public function select(){
            $blog = array();
            $this->connectDB->connect();
            $sql = " SELECT * FROM `blog`";
            $st = $this->connectDB->query($sql);
            while($rs = mysqli_fetch_array($st)){
                $blog[] = new Blog($rs['id'],$rs['imagen'],$rs['name'],$rs['detail'],$rs['date']);;
            }
            $this->connectDB->disconnect();
            return $blog;
        }

        public function eliminarBlog($id){
          $this->connectDB->connect();
          $sql = "DELETE FROM blog WHERE id = $id";
          $st = $this->connectDB->query($sql);
          $this->connectDB->disconnect();
        }

    }


?> 