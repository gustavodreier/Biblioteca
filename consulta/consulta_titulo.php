<?php

	include("../head.php");
	include("../include/conexao.php");

if (isset($_POST['enviar'])) {

	echo '<form action="muda_titulo.php" method="post">';

        echo '<h3>Selecione o titulo.</h3>';
        $query = "SELECT nome,descricao FROM titulo WHERE id='".$_POST['id']."'";
        $consulta = mysql_query($query) or die("Erro 1 - ".mysql_error());
        $array = mysql_fetch_array($consulta);
        echo '<p>Nome: '.$array['nome'].'</p>';
        echo '<p>Descricao: '.$array['descricao'].'</p>';
	echo '<center><a href="../index.php">Voltar</center>';

} else {
?>
	<form action="consulta_titulo.php" method="post">
	<h3>Selcione o titulo</h3>

	<div>
	<select name="id">
		<?php
			$consulta = mysql_query('select id,nome from titulo where 1=1') or die(mysql_error("Problema na consulta."));
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



include("../tail.php");
?>
