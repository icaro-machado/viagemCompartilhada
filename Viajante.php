<?php

class Viajante
{
    public $viajante;
    public $saldo;
    public $valorDividido;

    public function __construct(string $viajante, float $saldo = 0)
    {
        $this->viajante = $viajante;
        $this->saldo = $saldo;
    }

    public function atualizarSaldo(float $valorDividido)
    {        
        $saldo = $saldo + $valorDividido;
        return $saldo;
    }
}