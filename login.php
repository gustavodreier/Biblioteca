<html>
<head>
	<title>Página de login</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/Biblioteca/style_login.css">
<head>
<?php

session_start();

	if(isset($_SESSION['name']) && isset($_SESSION['type'])) {
		//Se já existir uma sessao, redireciona para página inicial
		header("Location: index.php");
	} else {
?>
		<body>
			<div class="container">
			  <div class="login">
				<h1>Login</h1>
				<form method="post" action="valida_login.php">
				  <p><input type="text" name="usuario" value="" placeholder="Username or Email"></p>
				  <p><input type="password" name="pass" value="" placeholder="Password"></p>
				  <p class="submit"><input type="submit" name="commit" value="Login"></p>
				</form>
			  </div>
			</div>
		</body>
		</html>
	<?php	
		
	}

?>