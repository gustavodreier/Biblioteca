<?php
	include("../head.php");

?>


		<?php
require('../include/conexao.php');

	//Valida se os dados
	$nome = $_POST['nome'];
	$valido = TRUE;
	
	//INSERT INTO tabela ( ) values 
	if ($nome == '')
		$valido == FALSE;
	
	if ($valido) {
		$query = "INSERT INTO autor (nome) VALUES ('".$nome."')";
	}
	
	
	$consulta = mysql_query($query) or die(mysql_error());
	
	echo "Dados inseridos com sucesso!!!";

	
	include("../tail.php");
?>