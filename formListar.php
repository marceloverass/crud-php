<!-- formListar.php -->
<?php require_once "conecta.php" ?>
<?php require_once "Funcionarios.php" ?>
<?php require_once "banco-funcionario.php"?>
<?php
 echo "<center><h1>LISTAR FUNCIONÁRIOS
     </center></h1>";
 listaFuncionario($conecta);
?>