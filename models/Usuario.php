<?php
class Usuario{
    private  $id;
    private  $nombre;
    private  $correo;
    private  $pass;
    private  $imagen;
    private  $direccion;
    private  $rol;
    private  $estado;


    function __construct($id,$nombre,$correo,$pass,$imagen,$direccion,$rol,$estado) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->pass = $pass;
        $this->imagen = $imagen;
        $this->direccion = $direccion;
        $this->rol = $rol;
        $this->estado = $estado;
    }
    public function getId():int {
        return $this->id;
    }
    public function getNombre():string {
        return $this->nombre;
    }
    public function getCorreo():string {
        return $this->correo;
    }
    
    public function getPass():string {
        return $this->pass;
    }
    public function getImagen() {
        return $this->imagen;
    }
    public function getdireccion() {
        return $this->direccion;
    }
    public function getRol():int {
        return $this->rol;
    }
    public function getEstado():int {
        return $this->estado;
    }
}
