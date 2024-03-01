<?php

$salas = array(
    "Sala A" => 20,
    "Sala B" => 15,
    "Sala C" => 10
);

function verificarDisp($sala, $dia, $horario)
{
    global $salas;
    if (array_key_exists($sala, $salas) && $salas[$sala] > 0) {
        return true;
    } else {
        return false;
    }
}

function reservarSala($sala, $cliente, $dia, $horario)
{
    global $salas;
    if (verificarDisp($sala, $dia, $horario)) {
        $salas[$sala]--;
        echo "Reserva realizada com sucesso: $sala para o cliente $cliente, no dia $dia no horário $horario.";
    } else {
        echo "Desculpe mas não foi possível realizar reserva nesta sala para as definições de dia e horário selecionados, tente outra sala";
    }
}

$dia = "2024-03-23";
$horario = "10:00 am";
$sala = "Sala A";
$cliente = "Fulano da Silva";

reservarSala($sala, $cliente, $dia, $horario);

?>