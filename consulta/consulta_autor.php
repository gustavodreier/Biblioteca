<?php

	include("../head.php");
	include("../include/conexao.php");

if (isset($_POST['enviar'])) {

	echo '<h3>Preencha os campos abaixo.</h3>';
	$query = "SELECT nome FROM autor WHERE id='".$_POST['id']."'";
	$consulta = mysql_query($query) or die("Erro 1 - ".mysql_error());
	$array = mysql_fetch_array($consulta);
	echo '<p>Nome: '.$array['nome'].'</p><br/>';
	echo '<center><a href="../index.php">Voltar</center>';

} else {
?>
	<form action="consulta_autor.php" method="post">
	<h3>Selcione o autor</h3>

	<div>
	<select name="id">
		<?php
			$consulta = mysql_query('select id,nome from autor where 1=1') or die(mysql_error("Problema na consulta."));
			for ($i = 0;$i < mysql_num_rows($consulta);$i++) {
				$dados = mysql_fetch_array($consulta);
				echo "<option value=".$dados['id'].">".$dados['nome']."</option>";
			}

		?>
	<select>
	<center><input name="enviar" type="submit" value="Enviar" class="botao"/></center>
	</div>
	</form>
<?php

}//fim else



include($path."tail.php");
?>
