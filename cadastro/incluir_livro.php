<?php
	include("../head.php");

?>


		<?php
require('../include/conexao.php');


	$dados['titulo'] = $_POST['titulo'];
	//Valida se os dados
	$valido = TRUE;
	
	//INSERT INTO tabela ( ) values 
	foreach ($dados AS $i) {
		if ($i == "")
			$valido == FALSE;
	}
	
	if ($valido) {
		$query = "INSERT INTO livro (id_titulo) VALUES ('".$dados['titulo']."')";
		$consulta = mysql_query($query) or die(mysql_error());
	
		echo "Dados inseridos com sucesso!!!";
	}
	
	include("../tail.php");
?>
