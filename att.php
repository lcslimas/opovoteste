<?php 

	// include com conexão. Atualização dos valores da tabela tendo como parametro o id 
	include("conexao.php");

	$id= $_POST['id'];
	$nome= $_POST['nome'];
	$num= $_POST['num'];
	// if para testar se query ocorreu tudo bem
	if(mysqli_query($con, "update cliente set nome='".$nome."', numero='".$num."' where id='".$id."'")){

	echo "<script>alert('Atualização concluída!!'); window.location.href='pesquisa.php' </script>";
}else{
	echo "<script>alert('Problema no banco de dados'); window.location.href='pesquisa.php' </script>";

}



	

?>