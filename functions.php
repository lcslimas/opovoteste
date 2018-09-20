<?php 
	// Séries de funções utilizadas em outras páginas
	function insert($nome,$num){
		include("conexao.php");
		if(mysqli_query($con, "insert into cliente values('','".$nome."','".$num."')")){
			return true;
		}else{
			return false;
		}
	}

	function query($nome,$num){
		include("conexao.php");
		$result=mysqli_query($con, "Select * from cliente where nome='".$nome."' or numero='".$num."'");
		return $result;
	}

	function delete($id){
		include("conexao.php");
		if(mysqli_query($con, "delete from cliente where id='".$id."'")){
			echo "<script>alert('Cliente excluído'); window.location.href='pesquisa.php'</script>";
		}else{
			echo "<script> alert('Problema ao excluir cliente'); window.location.href='pesquisa.php';</script>";
		}
	}



?>