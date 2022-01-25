<?php

require_once "Compra.php";
require_once "Viajante.php";

            // Início da inclusão dos participantes da Viagem

$participantesDaViagem = [
    new Viajante("Pessoa 1"),
    new Viajante("Pessoa 2"),
    new Viajante("Pessoa 3"),
    new Viajante("Pessoa 4")
];

$i = 0;
$numeroDeViajantes = count($participantesDaViagem);

echo PHP_EOL;
echo "Os participantes dessa viagem são:" . PHP_EOL;

while ($i < $numeroDeViajantes) {
    echo "- " . $participantesDaViagem[$i]->viajante . PHP_EOL;
    $i++;
};

echo PHP_EOL;

            // Finalização da inclusão dos participantes da Viagem

            // Início da Inclusão de novas compras

$compras = [
    $primeiraCompra = new Compra(
    "Pizzaria",
    60,
    [$participantesDaViagem[0]->viajante, $participantesDaViagem[1]->viajante],
    [$participantesDaViagem[0]->viajante]
    ),

    $segundaCompra = new Compra(
    "Shopping",
    350,
    [$participantesDaViagem[0]->viajante, $participantesDaViagem[1]->viajante, $participantesDaViagem[2]->viajante],
    [$participantesDaViagem[2]->viajante]
    ),

    $terceiraCompra = new Compra(
    "Passeio do roteiro",
    450,
    [$participantesDaViagem[0]->viajante, $participantesDaViagem[1]->viajante, $participantesDaViagem[3]->viajante],
    [$participantesDaViagem[0]->viajante]
    ),

    $quartaCompra = new Compra(
    "Roupas",
    350,
    [$participantesDaViagem[0]->viajante, $participantesDaViagem[3]->viajante],
    [$participantesDaViagem[0]->viajante]
    )
];

$z = 0;
$numeroDeCompras = count($compras);

echo "As compras realizadas foram:" . PHP_EOL;

while ($z < $numeroDeCompras) {
    echo "- " . $compras[$z]->nomeDaCompra . PHP_EOL;
    echo "  - Essa compra teve " . count($compras[$z]->participantesDaCompra) . " participantes." . PHP_EOL;
    echo "  - Valor total da compra: R$" . $compras[$z]->valor . PHP_EOL;
    echo "  - Pagador: " . $compras[$z]->pagador[0] . PHP_EOL;
    echo "  - Devedor(es): " . PHP_EOL;    
    foreach ($compras[$z]->devedores as $devedor) {
        echo "   - " . $devedor . PHP_EOL;
    }
    echo "  - Valor a ser pago pelo(s) devedor(es): R$" . $compras[$z]->valorDividido;
    echo PHP_EOL;
    echo PHP_EOL;
    $z++;
};