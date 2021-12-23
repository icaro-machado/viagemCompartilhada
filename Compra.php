<?php

require 'Viajante.php';

class Compra
{
    public $nomeDaCompra;
    public $valor;
    public $participantesDaCompra;
    public $pagador;

    public function __construct(string $nomeDaCompra, float $valor, array $participantesDaCompra, array $pagador)
    {
        $this->nomeDaCompra = $nomeDaCompra;
        $this->valor = $valor;
        $this->participantesDaCompra = $participantesDaCompra;
        $this->pagador = $pagador;

        if ($valor < 0) {
            echo "Essa compra não é válida. O valor precisa ser positivo!";
            return false;
        }

        if ($participantesDaCompra == null) {
            return false;
        }

        if (count(array_intersect($pagador, $participantesDaCompra)) == 0) {
            return false;
        }
    }
}