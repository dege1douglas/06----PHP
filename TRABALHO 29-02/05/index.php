<?php
$ocorrencias = array(
    "José" => 0,
    "Arnou" => 0,
    "Lou" => 0
);

function imprimirResumo($ocorrencias)
{
    $total_ocorrencias = array_sum($ocorrencias);
    $total_tiroteio = $ocorrencias["José"];
    $percentual_direcao_perigosa = ($ocorrencias["José"] / $total_ocorrencias) * 100;

    echo "Resumo das Ocorrências:\n";
    foreach ($ocorrencias as $policial => $qtd) {
        echo "$policial: $qtd ocorrências\n";
    }
    echo "Ocorrências de tiroteio: $total_tiroteio\n";
    echo "Percentual de ocorrências de Direção Perigosa: " . number_format($percentual_direcao_perigosa, 2) . "%\n";
    echo "\n";
}

function atribuirOcorrencia($ocorrencias, $tipo, $gravidade)
{
    $policial_menos_ocorrencias = array_keys($ocorrencias, min($ocorrencias))[0];
    $ocorrencias[$policial_menos_ocorrencias]++;
    imprimirResumo($ocorrencias);
}

atribuirOcorrencia($ocorrencias, "Direção Perigosa", "Alto");
atribuirOcorrencia($ocorrencias, "Barulho", "Baixo");
atribuirOcorrencia($ocorrencias, "Tiroteio", "Alto");
?>