<?php 
//Include com as funções query(que faz consulta)
	include("functions.php");
	include("conexao.php");
	@$nome = $_GET['nome'];
	@$num = $_GET['num'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pesquisar clientes</title>


</head>
<body>
	<table>
		<form action="pesquisa.php" method="get">
			<tr><td></td><th>Pesquisar:</th></tr>	
			<tr><td>Nome</td><td><input type="text" name="nome"></td></tr>			
			<tr><td>Numero</td><td><input type="text" name="num"></td></tr>
			<tr><td></td><td><input type="submit" value="pesquisar"></td></tr>
		</form>
		</table>
		<table border="1">
		<tr><th>Clientes</th></tr>
		<tr><td>Nome:</td><td>Numero:</td><td>Apagar:</td><td>Atualizar:</td></tr>
		
	<?php 
	//Caso pesquisado vai utilizar função query() se não vai pegar todos os resultado da tabela
		if($nome!="" || $num!=""){
		$result = query($nome,$num);
		}else{
			$result = mysqli_query($con, "select * from cliente");
		}
		// mysqli_fetch_array() para obter os resultados, transformo-os em array e chamo os valores desejados por $linha['']
		// button com onclick e script window.location.href para redirecionamento
		while($linha = mysqli_fetch_array($result)){?>
			<tr><td><?php echo $linha['nome'] ?></td>
				<td><?php echo $linha['numero'] ?></td>
				<td><button onclick="window.location.href='excluir.php?id=<?php echo $linha['id']?>'" id="excluir">Excluir cliente</button> </td>
				<td><button  onclick="window.location.href='atualizar.php?id=<?php echo $linha['id']?>'" id="atualizar">Atualizar cliente</button> </td></tr>
		
		<?php
	}

	?>	
	</table>
	<button onclick="window.location.href='index.html'">Retornar</button>
</body>
</html>