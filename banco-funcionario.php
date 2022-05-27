<!-- banco-funcionario.php -->
<?php require_once "conecta.php" ?>
<?php require_once "Funcionarios.php" ?>
<?php
 function insereFuncionario($conecta,$funcionario){
 $sql="insert into dados_pessoais
  (nome,cpf,endereco,telefone)values
  ('$funcionario->nome','$funcionario->cpf',
  '$funcionario->endereco','$funcionario->telefone')";
 $resultado= mysqli_query($conecta,$sql);
 return $resultado;
 }//fim do método insere
 
 function deletaFuncionario($conecta,$funcionario){
	$sql="delete from dados_pessoais where 
	id=$funcionario->id ";
    $resultado= mysqli_query($conecta,$sql);
    return $resultado;	
}//fim do método deletar


function listaFuncionario($conecta){
  $sql="select * from dados_pessoais";
  $resultado= mysqli_query($conecta,$sql);
  while($array=mysqli_fetch_assoc( $resultado)){
	
   ?>	
    <center>
	<form action="alterarForm.php" method=GET>
	<table border=1>
	  <tr>
	    <td>id</td>
		<td>
		    <input type=text 
		    value=<?php echo $array['id'];?> 
			name=id readonly>
	    </td>	
	  </tr>
	   <tr>
	    <td>nome</td>
		<td>
		    <input type=text 
		    value=<?php echo $array['nome'];?> name=nome>
	    </td>	
	  </tr>
	    <tr>
	    <td>cpf</td>
		<td>
		    <input type=text 
		    value=<?php echo $array['cpf'];?> name=cpf>
	    </td>
		
		<tr>
	       <td>endereco</td>
		   <td>
		    <input type=text 
		    value=<?php echo $array['endereco'];?> name=endereco>
	       </td>
	    </tr>
		
		<tr>
	       <td>telefone</td>
		   <td>
		    <input type=text 
		    value=<?php echo $array['telefone'];?> name=telefone>
	       </td>
	    </tr>
		<tr>
		   <td colspan=2>
		    <center><input type=submit value=Alterar>
			</center>
	       </td>
	    </tr>
	</table>
	</form>
	<br>
	</center>
	<?php
	}//fim do while
 }//fim do método listar 
 
 function alteraFuncionario($conecta,$funcionario){
	 
 $sql="update dados_pessoais set
            nome='$funcionario->nome',
			cpf ='$funcionario->cpf',
			endereco='$funcionario->endereco',
			telefone='$funcionario->telefone'
		where id=$funcionario->id ";
    $resultado=mysqli_query($conecta,$sql);
    return $resultado;	 
}//fim do método alterar
?>
 
