<?php

require 'Viajantes.php';

class Compra
{
    public $nomeDaCompra;
    public $valor;
    public $participantesDaCompra;

    public function __construct(string $nomeDaCompra, float $valor, array $participantesDaCompra)
    {
        $this->nomeDaCompra = $nomeDaCompra;
        $this->valor = $valor;
        $this->participantesDaCompra = $participantesDaCompra;

        if ($valor < 0) {
            echo "Essa compra não é válida. O valor precisa ser positivo!";
            return false;
        }

        if ($participantesDaCompra == null) {
            return false;
        }
    }
}
