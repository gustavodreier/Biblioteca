<?php
require('conexao.inc');
conecta_db();
?>
<head>
	<title>Página de login</title>
	 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<body>
	<form method="post" action="valida_login.php">
	<label>Usuário</label>
	<input type="text" name="usuario" maxlength="50" /><br/>
	<label>Senha</label>
	<input type="password" name="senha" maxlength="50" />
	<br/>
	<input type="submit" value="Entrar" />
	</form>
</body>