<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$numero = rand(1, 10);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h2>
    <h3>Tabuada do número aleatório <?php echo $numero; ?>:</h3>
    <ul>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$numero x $i = " . ($numero * $i) . "</li>";
        }
        ?>
    </ul>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
