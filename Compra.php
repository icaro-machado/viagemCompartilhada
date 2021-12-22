<?php

require 'Viajantes.php';

class Compra
{
    public $nomeDaCompra;
    public $valor;
    public $participantesDaCompra;
    public $pagador;

    public function __construct(string $nomeDaCompra, float $valor, array $participantesDaCompra, string $pagador)
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

        if (array_key_exists($pagador, $participantesDaCompra) == false) {
            echo "O pagador da compra $nomeDaCompra não é válido, favor informar um pagador correto!" . PHP_EOL;
            exit();
        }
    }
}