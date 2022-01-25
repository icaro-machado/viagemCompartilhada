<?php

require 'Viajante.php';

class Compra extends Viajante
{
    public $nomeDaCompra;
    public $valor;
    public $participantesDaCompra;
    public $pagador;
    public $devedores;

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

        $valorDividido = $valor/(count($participantesDaCompra));
        $this->valorDividido = $valorDividido;

        $devedores = array_diff($participantesDaCompra, $pagador);
        $this->devedores = $devedores;
    }
}