<?php

class VentaInformacion
{
    private $codigo;
    private $nombre;
    private $producto;
    private $cantidad;
    private $total;
    private $envio;
    private $pago;
    private $comprobante;


    function __construct($codigo, $nombre, $producto, $cantidad, $total, $envio, $pago, $comprobante)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->producto = $producto;
        $this->cantidad = $cantidad;
        $this->total = $total;
        $this->envio = $envio;
        $this->pago = $pago;
        $this->comprobante = $comprobante;
    }

    public function getCodigo(): int
    {
        return $this->codigo;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getProducto(): string
    {
        return $this->producto;
    }
    public function getCantidad(): string
    {
        return $this->cantidad;
    }
    public function getTotal(): int
    {
        return $this->total;
    }
    public function getEnvio(): string
    {
        return $this->envio;
    }
    public function getPago(): string
    {
        return $this->pago;
    }
    public function getComprobante(): string
    {
        return $this->comprobante;
    }
}
