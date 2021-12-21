<?php

require_once "Compra.php";
require_once "Viajantes.php";

            // Início da inclusão dos participantes da Viagem

$participantesDaViagem = new Viajantes(["Icaro","Rafa","Maria","Tiao"]);

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

$compra1 = new Compra("Pizzaria",10,["Icaro", "Rafa"]);

$numeroDeParticipantes = count($compra1->participantesDaCompra);
$comparacaoNumeroDeParticipantesComViajantes = count(array_intersect($compra1->participantesDaCompra, $participantesDaViagem->viajantes));

if ($numeroDeParticipantes == $comparacaoNumeroDeParticipantesComViajantes && $numeroDeParticipantes != 0):
    $valorParaCada = $compra1->valor/$numeroDeParticipantes;
    echo "Todos os participantes dessa compra estão na viagem!" . PHP_EOL;
    echo "O valor para cada participante dessa compra será de R$" . $valorParaCada . PHP_EOL;
else:
    echo "Os participantes dessa compra não estão na viagem!" . PHP_EOL;
    echo "Essa compra não é válida!" . PHP_EOL;
endif;