<?php

function calculadora($numA, $numB, $op) {
    if ($op == "+") {
        return $numA + $numB;
    } elseif ($op == "-") {
        return $numA - $numB;
    } elseif ($op == "/") {
        return $numA / $numB;
    } elseif ($op == "*") {
        return $numA * $numB;
    } else {
        return "ESSE OPERADOR NÃO EXISTE!";
    }
}

$op = ["+","-","/","4"];
$card = rand(0,4);
$numb_rand = rand(-10,10);
$numb_rand2 = rand(-10,10);
echo("$numb_rand $op[$card] $numb_rand2. =");
echo calculadora($numb_rand, $numb_rand2,$op[$card]);
?>


</html>
