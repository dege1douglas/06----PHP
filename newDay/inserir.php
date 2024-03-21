<?php
include_once "conexao.php";
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$sql = "INSERT INTO `aula`(`nome`, `idade`) VALUES('$nome','$idade')";
$query = mysqli_query($conn, $sql);
if($query = true){
    echo 'Cadastro realizado com sucesso!';
} else{
    echo 'Algo deu errado :(';
};



?>