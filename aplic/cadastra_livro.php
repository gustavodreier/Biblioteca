<?php
	include("../head.php");

?>
		<form action="" method="post">
		<fieldset>
		<legend>Preencha os campos abaixo</legend>

		<?php
$conn = mysql_connect('localhost', 'usuario', 'senha');
if (!$conn) {
    die('Não foi possível conectar: ' . mysql_error());
}
mysql_select_db('biblioteca');
//$result = mysql_query('select * from ');
$result = mysql_query('show fields from '.$_GET['tabela']);

if (!$result) {
    die('A consulta falhou: ' . mysql_error());
}
/* obtém as informações da coluna */
require('../function/functions.php');
$i = 0;
while ($i < mysql_num_rows($result)) {
	$dados = mysql_fetch_array($result);
	//echo '<label for="'.$dados['Field'].'">'.$dados['Field'].'</label><input name="'.$dados['Field'].'" size="31" type="text"/><br />';
	echo geraLabel($dados['Field'],$dados['Type']);
	//echo $dados['Field'].'<br />';
	//echo $dados['Type'].'<br/>';
	$i++;
}
?>

		<input name="enviar" type="submit" value="Enviar" class="botao"/>
		<input name="cancelar" type="reset" value="Limpar" class="botao"/>

		</fieldset>
		</form>
	</body>
</html>
