<?php 
// include com as funções. No caso utilizado a funcao delete()
include("functions.php");
	$id = $_GET['id'];

	delete($id);

?>