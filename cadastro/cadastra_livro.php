<?php
	include("../head.php");
	
?>
	<form action="incluir_livro.php" method="post">
	<h3>Preencha os campos abaixo</h3>

	<div>
		<p>Titulo: <select name="titulo">
		<?php
			//echo "<option value=''> -selecione- </option>";
			include("../include/conexao.php");
			$consulta = mysql_query('select id,nome from titulo where 1=1') or die(mysql_error("Problema na consulta."));
			for ($i = 0;$i < mysql_num_rows($consulta);$i++) {
				$dados = mysql_fetch_array($consulta);
				echo "<option value=".$dados['id'].">".$dados['nome']."</option>";
			}
		
		?>
			</select><br/>
		<center><input name="enviar" type="submit" value="Enviar" class="botao"/></center>
	</div>
	</form>
<?php
include("../tail.php");
?>