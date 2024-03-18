<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cadastro'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_COOKIE['usuarios'])) {
        $usuarios = unserialize($_COOKIE['usuarios']);
    } else {
        $usuarios = [];
    }

    //usuário já existe
    if (isset($usuarios[$username])) {
        echo "Usuário já cadastrado.";
    } else {
        //novo usuário ao array
        $usuarios[$username] = $password;

        setcookie('usuarios', serialize($usuarios), time() + (86400 * 30), '/'); // Cookie válido por 30 dias
        echo "Cadastro realizado com sucesso.";
    }
}

//formulário de login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if (isset($_COOKIE['usuarios'])) {
        $usuarios = unserialize($_COOKIE['usuarios']);

        // se a senha está correta
        if (isset($usuarios[$username]) && $usuarios[$username] == $password) {
            $_SESSION['username'] = $username;
            header("Location: tabuada.php");
            exit();
        } else {
            echo "Usuário ou senha incorretos.";
        }
    } else {
        echo "Nenhum usuário cadastrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Login</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="cadastro" value="true">
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Cadastrar">
    </form>

    <h2>Login</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="login" value="true">
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
