<?php

class Viajante
{
    public $viajante;
    public $saldo;

    public function __construct(string $viajante, float $saldo = 0)
    {
        $this->viajante = $viajante;
        $this->saldo = $saldo;
    }
}