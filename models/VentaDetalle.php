<?php

class VentaInformacion
{
    private $codigo;
    private $producto;
    private $cantidad;
    private $nombre;
    private $total;
    private $envio;
    private $pago;

    function __construct($codigo, $producto, $cantidad, $nombre, $total, $envio, $pago)
    {
        $this->codigo = $codigo;
        $this->producto = $producto;
        $this->cantidad = $cantidad;
        $this->nombre = $nombre;
        $this->total = $total;
        $this->envio = $envio;
        $this->pago = $pago;
    }

    public function getCodigo(): int
    {
        return $this->codigo;
    }
    public function getProducto(): string
    {
        return $this->producto;
    }
    public function getCantidad(): int
    {
        return $this->cantidad;
    }
    public function getNombre(): int
    {
        return $this->nombre;
    }
    public function getTotal(): int
    {
        return $this->total;
    }
    public function getEnvio(): int
    {
        return $this->envio;
    }
    public function getPago(): int
    {
        return $this->pago;
    }
}
