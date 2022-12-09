<?php

class DireccionEnvio
{
    private $id;
    private $cod_venta;
    private $nombre;
    private $direccion;
    private $comuna;
    private $telefono;
    private $observacion;


    function __construct($id, $cod_venta, $nombre, $direccion, $comuna, $telefono, $observacion)
    {
        $this->id = $id;
        $this->cod_venta = $cod_venta;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->comuna = $comuna;
        $this->telefono = $telefono;
        $this->observacion = $observacion;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getCodVenta(): int
    {
        return $this->cod_venta;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getDireccion(): string
    {
        return $this->direccion;
    }
    public function getComuna(): string
    {
        return $this->comuna;
    }
    public function getTelefono(): string
    {
        return $this->telefono;
    }
    public function getObservacion(): string
    {
        return $this->observacion;
    }
}
