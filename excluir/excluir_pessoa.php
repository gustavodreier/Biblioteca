<?php

	include("../head.php");
	include("../include/conexao.php");

if (isset($_POST['enviar'])) {


        echo '<h3>Selecione o pessoa.</h3>';
	$email = $_POST['email'];
	if ($email == $_SESSION['name']) {
	echo "Não é possível remover o seu próprio usuario.";
	} else {
		$query = "DELETE FROM login WHERE usuario='".$email."'";
                $consulta = mysql_query($query) or die("Erro 1 - ".mysql_error());
		$query = "DELETE FROM pessoa WHERE id='".$_POST['id']."'";
	        $consulta = mysql_query($query) or die("Erro 2 - ".mysql_error());

		echo "Usuário removido com sucesso!";
		
		//echo "Login removido com sucesso!";
		
	}
	echo '<center><a href="../index.php">Voltar</center>';

} else {
?>
	<form action="excluir_pessoa.php" method="post">
	<h3>Selcione o pessoa</h3>

	<div>
	<select name="id">
		<?php
			$consulta = mysql_query('select id,nome,email from pessoa where 1=1') or die(mysql_error("Problema na consulta."));
			for ($i = 0;$i < mysql_num_rows($consulta);$i++) {
				$dados = mysql_fetch_array($consulta);
				echo "<option value=".$dados['id'].">".$dados['nome']."</option>";
			}
			echo "/<select>";

			echo '<input type="hidden" name="email" value="'.$dados['email'].'">';
		?>

	<center><input name="enviar" type="submit" value="Enviar" class="botao"/></center>
	</div>
	</form>
<?php

}//fim else



include("../tail.php");
?>
