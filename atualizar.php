<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>

</head>
<body>
	<table id="table">
		<?php 
		//obtenção do id pela url por meio do get e utilização dele para pesquisa no banco de dados
		$id = $_GET['id'];
		include("conexao.php");
		  	$result = mysqli_fetch_array(mysqli_query($con,"select * from cliente where id=".$id.""));

		?>
		<form action="att.php" method="post">
			<tr>
				<th>Cadastro:</th>
			</tr>
			<input type="hidden" name="id" <?php echo "value='".$result['id']."'"; ?> required >
			<tr>
				<td>Nome:</td><td> <input type="text" name="nome" <?php echo "value='".$result['nome']."'"; ?> required></td>
			</tr>
			<tr>
				<td>Numero:</td><td> <input type="text" name="num" <?php echo "value='".$result['numero']."'"; ?> required></td>
			</tr>
			<tr>
				<td></td><td align="right"> <input type="submit" value="enviar"></td>
			</tr>
		</form>
		<tr><td><button onclick="window.location.href='index.html'">Retornar</button></td></tr>
	</table>
</body>
</html>
