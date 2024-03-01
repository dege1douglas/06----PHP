<?php
$sacola = array();

function adicionarPizza($sabor, $tamanho)
{
    global $sacola;
    $sacola[] = array("sabor" => $sabor, "tamanho" => $tamanho);
}

function calcularTotal()
{
    global $sacola;
    $total = 0;
    foreach ($sacola as $pizza) {
        if ($pizza["tamanho"] == "pequena") {
            $total += 20;
        } elseif ($pizza["tamanho"] == "media") {
            $total += 30;
        } elseif ($pizza["tamanho"] == "grande") {
            $total += 40;
        }
    }
    if (count($sacola) > 1) {
        $total -= 2;
    }
    return $total;
}

adicionarPizza("Calabresa", "grande");
adicionarPizza("Margherita", "grande");

$total = calcularTotal();
echo "Total da compra: R$ $total";
?>