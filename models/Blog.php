<?php
class Blog{
    private  $id;
    private  $imagen;
    private  $nombre;
    private  $detalle;
    private  $fecha;

    function __construct($id,$imagen,$nombre,$detalle,$fecha) {
        $this->id = $id;
        $this->imagen = $imagen;
        $this->nombre = $nombre;
        $this->detalle = $detalle;
        $this->fecha = $fecha;
    }
    public function getId():int {
        return $this->id;
    }
    public function getImagen():string {
        return $this->imagen;
    }
    public function getNombre():string {
        return $this->nombre;
    }
    public function getDetalle():string {
        return $this->detalle;
    }
    
    public function getFecha():string {
        return $this->fecha;
    }
}
?>