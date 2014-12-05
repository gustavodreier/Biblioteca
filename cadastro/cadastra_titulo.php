<?php
	include("../head.php");

?>
	<div>
		<form action="incluir_titulo.php" method="post">
		<h3>Preencha os campos abaixo</h3>
		Título:<input name="nome" size="20" maxlenght="20" type="text"/>
		Descrição:<input name="desc" size="31" maxlenght="100" type="text"/><br/>
		<?php
			include("../include/conexao.php");
			echo "<br/>Genero: <select name=genero>";
			$consulta = mysql_query('select id,nome from genero where 1=1') or die(mysql_error("Problema na consulta."));
			for ($i = 0;$i < mysql_num_rows($consulta);$i++) {
				$dados = mysql_fetch_array($consulta);
				echo "<option value=".$dados['id'].">".$dados['nome']."</option>";
			}
		
			echo "</select>
					Autor: <select name=autor>";
			
			$consulta = mysql_query('select id,nome from autor where 1=1') or die(mysql_error("Problema na consulta."));
			for ($i = 0;$i < mysql_num_rows($consulta);$i++) {
				$dados = mysql_fetch_array($consulta);
				echo "<option value=".$dados['id'].">".$dados['nome']."</option>";
			}
			echo "</select><br/>";
		?>
		<center><input name="enviar" type="submit" value="Enviar" class="botao"/></center>
	</div>

<?php
include("../tail.php");
?>