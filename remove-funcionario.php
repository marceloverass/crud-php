<!-- remove-funcionario.php -->
<?php require_once "conecta.php" ?>
<?php require_once "Funcionarios.php" ?>
<?php require_once "banco-funcionario.php"?>
<?php
  $funcionario=new Funcionarios();
  $funcionario->id = $_POST["id"];
if(deletaFuncionario($conecta,$funcionario)){
  echo "Deletado com sucesso!";
}else{
  echo mysqli_error($conecta);
}?>
<a href="index.php">VOLTAR</a>