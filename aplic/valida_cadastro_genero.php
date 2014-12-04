<?php
	include("../head.php");

?>


		<?php
require('../include/conexao.php');

	//Valida se os dados
	$nome = $_POST['nome'];
	$desc = $_POST['desc'];
	$valido = TRUE;
	
	//INSERT INTO tabela ( ) values 
	if ($nome == '' || $desc == '')
		$valido == FALSE;
	
	if ($valido) {
		$query = "INSERT INTO autor (nome, descricao) VALUES ('".$nome."','".$desc."')";
	}
	
	
	$consulta = mysql_query($query) or die(mysql_error());
	
	echo "Dados inseridos com sucesso!!!";

	include("../tail.php");
?>

