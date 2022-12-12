<?php

class detalleVEnvio
{
    private $id;
    private $image;
    private $title;
    private $price;
    private $cod_pro;
    private $codigo;
    private $cantidad;
    private $total;
    private $nombre;
    private $direccion;
    private $comuna;
    private $telefono;
    private $tipo;

    function __construct($id, $image, $title, $price, $cod_pro, $codigo, $cantidad, $total, $nombre, $direccion, $comuna, $telefono, $tipo)
    {
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->cod_pro = $cod_pro;
        $this->codigo = $codigo;
        $this->cantidad = $cantidad;
        $this->total = $total;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->comuna = $comuna;
        $this->telefono = $telefono;
        $this->tipo = $tipo;
    }

    public function getid(): int
    {
        return $this->id;
    }
    public function getImage(): string
    {
        return $this->image;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
    public function getCodPro(): int
    {
        return $this->cod_pro;
    }
    public function getCodigo(): int
    {
        return $this->codigo;
    }
    public function getCantidad(): int
    {
        return $this->cantidad;
    }
    public function getTotal(): int
    {
        return $this->total;
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
    public function getTipo(): string
    {
        return $this->tipo;
    }
}
