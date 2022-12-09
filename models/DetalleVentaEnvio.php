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

    function __construct($id, $image, $title, $price, $cod_pro, $codigo, $cantidad, $total)
    {
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->cod_pro = $cod_pro;
        $this->codigo = $codigo;
        $this->cantidad = $cantidad;
        $this->total = $total;
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
}
