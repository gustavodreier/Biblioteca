<head>
	<title>Página de login</title>
	 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<?php

session_start();

	if(isset($_SESSION['name'])) {
		//Se já existir uma sessao, redireciona para página inicial
		header("Location: index.php");
	} else {
	?>
		<body>
			<form method="post" action="valida_login.php">
			<label>Usuário</label>
			<input type="text" name="usuario" maxlength="50" /><br/>
			<label>Senha</label>
			<input type="password" name="pass" maxlength="50" />
			<br/>
			<input type="submit" value="Entrar" />
			</form>
		</body>
	<?php	
		
	}

?>