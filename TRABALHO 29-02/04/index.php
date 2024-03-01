<?php
$times = array(
    "Flamengo" => array("vitorias" => 7, "empates" => 10, "derrotas" => 21),
    "Palmeiras" => array("vitorias" => 18, "empates" => 12, "derrotas" => 8),
    "Atlético-MG" => array("vitorias" => 19, "empates" => 9, "derrotas" => 10),
    "Fortaleza" => array("vitorias" => 15, "empates" => 13, "derrotas" => 10),
    "São Paulo" => array("vitorias" => 17, "empates" => 10, "derrotas" => 11),
    "Cruzeiro" => array("vitorias" => 10, "empates" => 10, "derrotas" => 18),
    "Grêmio" => array("vitorias" => 14, "empates" => 12, "derrotas" => 12),
    "Internacional" => array("vitorias" => 13, "empates" => 11, "derrotas" => 14),
    "Athletico-PR" => array("vitorias" => 16, "empates" => 9, "derrotas" => 13),
    "Corinthians" => array("vitorias" => 12, "empates" => 12, "derrotas" => 14),
    "Fluminense" => array("vitorias" => 11, "empates" => 14, "derrotas" => 13)
);

function calcularPontos($vitorias, $empates)
{
    return $vitorias * 3 + $empates;
}

$pontuacao = array();

foreach ($times as $time => $resultados) {
    $pontos = calcularPontos($resultados["vitorias"], $resultados["empates"]);
    $pontuacao[$time] = $pontos;
}

arsort($pontuacao);

echo "<h2>Tabela de Classificação - Campeonato Brasileiro 2024</h2>";
echo "<table border='1'>";
echo "<tr><th>Posição</th><th>Time</th><th>Pontos</th></tr>";
$posicao = 1;
foreach ($pontuacao as $time => $pontos) {
    echo "<tr><td>$posicao</td><td>$time</td><td>$pontos</td></tr>";
    $posicao++;
}
echo "</table>";

?>