<?php

class Venta
{
    private $codigo;
    private $usuario;
    private $total;
    private $tipo_envio;
    private $tipo_pago;

    function __construct($codigo, $usuario, $total, $tipo_envio, $tipo_pago)
    {
        $this->codigo = $codigo;
        $this->usuario = $usuario;
        $this->total = $total;
        $this->tipo_envio = $tipo_envio;
        $this->tipo_pago = $tipo_pago;
    }

    public function getCodigo(): int
    {
        return $this->codigo;
    }
    public function getUsuario(): int
    {
        return $this->usuario;
    }
    public function getTotal(): int
    {
        return $this->total;
    }
    public function getTipoEnvio(): int
    {
        return $this->tipo_envio;
    }
    public function getTipoPago(): int
    {
        return $this->tipo_pago;
    }
}
