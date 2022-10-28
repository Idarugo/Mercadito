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

    }


?> 