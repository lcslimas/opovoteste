<?php 
//Include da conexão e funções(no caso a funcao insert)
	include("conexao.php");
	include("functions.php");
	@$nome = $_POST['nome'];
	@$num = $_POST['num'];
	// verificação se variáveis estão preenchidas para efetuar inserção no banco de dados
	if($nome != "" && $num!=""){
		insert($nome,$num);
		echo "<script>alert('Cadastro concluído!')</script>";
	}
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>
	<table id="table">
		<form action="cadastro.php" method="post">
			<tr>
				<th>Cadastro:</th>
			</tr>
			<tr>
				<!-- Utilizado required (HTML5) -->
				<td>Nome:</td><td> <input type="text" name="nome" required></td>
			</tr>
			<tr>
				<td>Numero:</td><td> <input type="text" name="num" required></td>
			</tr>
			<tr>
				<!-- Button com o script window.location.href para redirecionamento-->
				<td><button onclick="window.location.href='index.html'">Retornar</button></td><td align="right"> <input type="submit" value="enviar"></td>
			</tr>
		</form>
	</table>
</body>
</html>