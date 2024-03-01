<?php
function verificarAutent($usuario, $senha)
{
    $usuario_correto = "admin";
    $senha_correta = "1234";
    return $usuario === $usuario_correto && $senha === $senha_correta;
}

function calcularExcesso($placa, $peso)
{
    $limite_peso = 30000;
    if ($peso > $limite_peso) {
        $excesso_peso = $peso - $limite_peso;
        $valor_multa = $excesso_peso * 400;
        echo "Placa: $placa\n";
        echo "Excesso de Peso: $excesso_peso kg\n";
        echo "Valor da Multa: R$ $valor_multa\n";
    } else {
        echo "O peso do caminhão com placa $placa está dentro do limite estabelecido pelo DNIT.\n";
    }
}

if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    if (verificarAutent($usuario, $senha)) {
        if (isset($_POST['placa']) && isset($_POST['peso'])) {
            $placa = $_POST['placa'];
            $peso = $_POST['peso'];
            calcularExcesso($placa, $peso);
        } else {
            echo "Dados insuficientes. Informe a placa e o peso do caminhão.";
        }
    } else {
        echo "Usuário ou senha incorretos. Acesso negado.";
    }
} else {
    echo "Dados insuficientes. Informe o usuário e a senha.";
}
?>