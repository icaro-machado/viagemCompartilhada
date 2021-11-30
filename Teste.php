<?php

$participantesDaCompra = ["qew","b","c","d"];
$viajantes = ["a","b","c","d","e"];

foreach ($participantesDaCompra as $value) {
    if (in_array($value, $viajantes)) {
        return true;
    } else {
        echo "Os participantes informados não estão listados na Viagem!";
        return false;
    }
}

