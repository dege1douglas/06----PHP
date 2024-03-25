<?php

include_once"conexao.php";

if(isset($_GET['codigo'])){
  $codigo = $_GET['codigo'];
  $sql = "SELECT * FROM cliente WHERE codigo = $codigo";
  $query = mysql_query($conn, $sql);
  $row = mysql_fetch_array($query);
}

if(isset($_POST['atualizar'])){
  $codigo = $_POST['codigo'];
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];
  $sql = "UPDATE cliente SET nome = '$nome', idade = $idade WHERE codigo = $codigo";
  $query = mysql_query($conn, $sql);
  echo("Dados atualizados com sucesso!");
}
?>

<form method="POST" action="">
    <input type="hidden" name="codigo" value="<?php echo $row['codigo'];?>">
    Editar nome: <input type="text" name="nome" value="<?php echo $row['nome'];?>">
    Editar idade: <input type="text" name="nome" value="<?php echo $row['idade'];?>">
    <input type="submit" name="atualizar" value="Atualizar">
</form>
