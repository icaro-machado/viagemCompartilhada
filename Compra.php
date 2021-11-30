<?php

include_once 'Viajantes.php';

class Compra
{
    public $nomeDaCompra;
    public $valor;
    public $participantesDaCompra;

    public function __construct(string $nomeDaCompra, int $valor, array $participantesDaCompra)
    {
        $this->nomeDaCompra = $nomeDaCompra;
        $this->valor = $valor;
        $this->participantesDaCompra = $participantesDaCompra;


        foreach ($participantesDaCompra as $value) {

            if (in_array($value, $viajantes)) {
                return true;
            } else {
                echo "Os participantes informados não estão listados na Viagem!";
                return false;
            }
        }
    }
}