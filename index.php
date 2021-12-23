<?php

require_once "Compra.php";
require_once "Viajante.php";

            // Início da inclusão dos participantes da Viagem

$participantesDaViagem = [
    new Viajante("Icaro"),
    new Viajante("Rafa"),
    new Viajante("Maria"),
    new Viajante("Tião")
];

$i = 0;
$numeroDeViajantes = count($participantesDaViagem);

echo "Os participantes dessa viagem são:" . PHP_EOL;

while ($i < $numeroDeViajantes) {
    echo "- " . $participantesDaViagem[$i]->viajante . PHP_EOL;
    $i++;
}

echo PHP_EOL;

            // Finalização da inclusão dos participantes da Viagem

            // Início da Inclusão de novas compras

$primeiraCompra = new Compra(
    "Pizzaria",
    60,
    [$participantesDaViagem[0]->viajante, $participantesDaViagem[1]->viajante],
    [$participantesDaViagem[0]->viajante]
);

$segundaCompra = new Compra(
    "Shopping",
    350,
    [$participantesDaViagem[0]->viajante, $participantesDaViagem[1]->viajante, $participantesDaViagem[2]->viajante],
    [$participantesDaViagem[2]->viajante]
);

$terceiraCompra = new Compra(
    "Passeio do roteiro",
    450,
    [$participantesDaViagem[0]->viajante, $participantesDaViagem[1]->viajante, $participantesDaViagem[3]->viajante],
    [$participantesDaViagem[0]->viajante]
);