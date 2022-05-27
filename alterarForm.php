<!-- alterarForm.php -->
<?php require_once "conecta.php" ?>
<?php require_once "Funcionarios.php" ?>
<?php require_once "banco-funcionario.php"?>
<?php
  $funcionario=new Funcionarios();
  $funcionario->id      = $_GET["id"];
  $funcionario->nome    = $_GET["nome"];
  $funcionario->cpf     = $_GET["cpf"];
  $funcionario->endereco= $_GET["endereco"];
  $funcionario->telefone= $_GET["telefone"];
	if(alteraFuncionario($conecta,$funcionario))
		//header("Location:formListar.php");
		echo "Alterado com sucesso";
    else
	   echo mysqli_error($conecta);
  
  
  
?>