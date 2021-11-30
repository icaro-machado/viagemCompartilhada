<?php

require_once "Compra.php";
require_once "Viajantes.php";

            // Início da inclusão dos participantes da Viagem

$participantesDaViagem = new Viajantes(["Icaro","Rafa","Maria","Tiao"]);

var_dump($participantesDaViagem);

$i = 0;
$numeroDeViajantes = count($participantesDaViagem->viajantes);

echo "Os participantes dessa viagem são:" . PHP_EOL;

while ($i < $numeroDeViajantes) {
    echo "-" . $participantesDaViagem->viajantes[$i] . PHP_EOL;
    $i++;
}

echo PHP_EOL;
 
            // Finalização da inclusão dos participantes da Viagem

            // Início da Inclusão de novas compras

$compra1 = new Compra("Pizzaria",10,["Icaro","Rafa"]);


var_dump($compra1);