<?php
	include("../head.php");

?>
	<div>
		<form action="muda_senha.php" method="post">
		<h3>Preencha os campos abaixo</h3>

		<p>Digite senha atual:<input name="pass" size="20" maxlenght="30" type="password"/><br/>
		
		<p>Digite sua nova senha:<input name="newPass" size="20" maxlenght="30" type="password"/><br/>
		<p>Confirme sua nova senha:<input name="newPass2" size="20" maxlenght="30" type="password"/><br/>
		
		<center><input name="enviar" type="submit" value="Enviar" class="botao"/></center>
	</div>

<?php
include("../tail.php");
?>