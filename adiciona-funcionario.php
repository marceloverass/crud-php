<!-- adiciona-funcionario.php -->
<?php require_once "conecta.php" ?>
<?php require_once "Funcionarios.php" ?>
<?php require_once "banco-funcionario.php"?>
<?php
  $funcionario=new Funcionarios();
  $funcionario->nome    = $_POST["nome"];
  $funcionario->cpf     = $_POST["cpf"];
  $funcionario->endereco= $_POST["endereco"];
  $funcionario->telefone= $_POST["telefone"];

 if(insereFuncionario($conecta,$funcionario) ){
	echo "<center>";
	echo "Cadastrado<br>";
	echo "Nome: $funcionario->nome <br>";
	echo "CPF:  $funcionario->cpf <br>";
    echo "Endereço: $funcionario->endereco <br>";	
	echo "Telefone: $funcionario->telefone <br>";	
	echo "</center>";	
 }else{
	 echo mysqli_error($conecta);
 }
?>
<a href="formDeletar.php ">Deseja Deletar</a>
<br>
<a href="formListar.php">Deseja Listar</a>