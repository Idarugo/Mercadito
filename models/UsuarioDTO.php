<?php
class UsuarioDTO{
    private  $id;
    private  $nombre;
    private  $correo;
    private  $direccion;
    private  $estado;


    function __construct($id,$nombre,$correo,$direccion,$estado) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->direccion = $direccion;
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
    public function getdireccion():string {
        return $this->direccion;
    }
    public function getEstado():int {
        return $this->estado;
    }
}
?>