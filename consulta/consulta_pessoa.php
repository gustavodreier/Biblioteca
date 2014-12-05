<?php

	include("../head.php");
	include("../include/conexao.php");

if (isset($_POST['enviar'])) {


        echo '<h3>Selecione o pessoa.</h3>';
	$query = "SELECT nome, email, rg, telefone, endereco, cidade, tipo FROM pessoa WHERE id='".$_POST['id']."'";
        $consulta = mysql_query($query) or die("Erro 1 - ".mysql_error());
        $array = mysql_fetch_array($consulta);
	echo '<p>Nome: '.$array['nome'].'</p>
	<p>Email: '.$array['email'].'</p>
	<p>RG: '.$array['rg'].'</p>
	<p>Telefone: '.$array['telefone'].'</p>
	<p>Endereço: '.$array['endereco'].'</p>
	<p>Cidade: '.$array['cidade'].'</p>';
	if ($array['tipo'] == 0) {
		echo '<p>Tipo de usuario: Bibliotecario</p>';
	} else {
		echo '<p>Tipo de usuario: Usuario</p>';
	}

	echo '<center><a href="../index.php">Voltar</center>';

} else {
?>
	<form action="consulta_pessoa.php" method="post">
	<h3>Selcione o pessoa</h3>

	<div>
	<select name="id">
		<?php
			$consulta = mysql_query('select id,nome from pessoa where 1=1') or die(mysql_error("Problema na consulta."));
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
