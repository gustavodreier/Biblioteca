<?php

	include("../head.php");
	include("../include/conexao.php");

if (isset($_POST['enviar'])) {

	echo '<form action="muda_pessoa.php" method="post">';

        echo '<h3>Selecione o pessoa.</h3>';
	$query = "SELECT nome, email, rg, telefone, endereco, cidade, tipo FROM pessoa WHERE id='".$_POST['id']."'";
        $consulta = mysql_query($query) or die("Erro 1 - ".mysql_error());
        $array = mysql_fetch_array($consulta);
	echo '<p>Nome:<input name="nome" size="20" value='.$array['nome'].' maxlenght="50" type="text"/>
		<p>Email:<input name="email" size="20" value='.$array['email'].' maxlenght="50" type="text"/><br/>
		<p>RG:<input name="rg" size="10" value='.$array['rg'].' maxlenght="10" type="text"/>
		<p>Telefone:<input name="telefone" value='.$array['telefone'].' size="10" maxlenght="9" type="text"/>
		<p>Endereço:<input name="endereco" value='.$array['endereco'].' size="20" maxlenght="20" type="text"/>
		<p>Cidade:<input name="cidade" value='.$array['cidade'].' size="20" maxlenght="20" type="text"/>
		<p>Tipo de usuario:<select name="tipo">';
		if ($array['tipo'] == 0) {
			echo '<option value="0" selected>Bibliotecario</option>
			<option value="1">Usuario</option>';
		} else {
			echo '<option value="0">Bibliotecario</option>
			<option value="1" selected>Usuario</option>';
		}

		echo '</select>';
		

        echo '<center><input name="enviar" type="submit" value="Enviar" class="botao"/></center>';

} else {
?>
	<form action="altera_pessoa.php" method="post">
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
