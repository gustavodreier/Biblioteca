<?php
include('include/conexao.php');
if (isset($_GET['id']) ) {
	$id = (int) $_GET['id'];
	if (isset($_POST['submitted'])) {
		foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value);
	}
	$sql = "UPDATE `autor` SET  `nome` =  '{$_POST['nome']}'   WHERE `id` = '$id' ";
	mysql_query($sql) or die(mysql_error());
	echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />";
	echo "<a href='list.php'>Back To Listing</a>";
}
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `autor` WHERE `id` = '$id' "));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Biblioteca - Página de Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/principal.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Biblioteca</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Cadastrar <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Atualizar</a></li>
                        <li><a href="#">Remover</a></li>
                        <li><a href="#">Consultar</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Menu 1</a></li>
                                <li><a href="#">Menu 2</a></li>
                                <li><a href="#"></a></li>
                                <li class="divider"></li>
                                <li><a href="#">Menu 3</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Menu 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron text-center main-header">
            <h1>SISTEMA DE BIBLIOTECA</h1>
            <h2>Seja Bem Vindo!</h2>
        </div>
        <div class="jumbotron">
            <form class="form-horizontal" role="form" method="post" action="valida_login.php">
                <fieldset>
                    <legend><h3 class="text-center">Formulário de Login</h3></legend>
                    <div class="container">
                        <div class="form-group">
                            <label class="col-sm-4 col-xs-12 control-label text-center">NOME:</label>
                            <div class="col-sm-4 col-xs-12">
                                <input class="form-control" type="text" name="nome" value="<?= stripslashes($row['nome']) ?>" />
                                <input class="form-control" type='hidden' value='1' name='submitted' />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-4" style="text-align: center">
                                <button type="submit" class="btn btn-primary btn-block">EDITAR</button>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
    </div>

    <script src="js\jquery.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
</body>
</html>