<script language="JavaScript">
    function setURL() {
        var a = document.getElementById('tipo').value;
        var b = document.getElementById('tabela').value;
        //b = a.options[a.selectedIndex].value;
        var url = "";
        if (b == "exame_paciente") {
            alert("Ainda não implementado");
        } else if (a == "cadastro" || a == "atualizar") {
            url = './controller/cadastro_' + b + '.php';
        } else if (a == "consulta" || a == "remover") {//ainda nao pensado como vai ficar
            url = './controller/' + a + '.php?tabela=' + b;
        } else {
            alert("Ainda não implementado");
        }
        document.formulario.action = url;
        document.formulario.submit();
    }
</script>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Biblioteca - Página de Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/principal.css" rel="stylesheet">
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
        <div class="jumbotron">
            <form class="form-horizontal" role="form" method="post" action="valida_login.php">
                <fieldset>
                    <legend>
                        <h1 class="text-center">Formulário</h1>
                        <h3 class="text-center">Selecione as opções desejadas</h3>
                    </legend>
                    <div class="container">
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-4 col-xs-12">
                                <select class="form-control" id="tipo">
                                    <option id="tipo" value="cadastro">Cadastrar</option>
                                    <option id="tipo" value="atualizar">Atualizar</option>
                                    <option id="tipo" value="remover">Remover</option>
                                    <option id="tipo" value="consulta">Consultar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-4 col-xs-12">
                                <select class="form-control" id="tabela">
                                    <option value="medico">Medico</option>
                                    <option value="paciente">Paciente</option>
                                    <option value="exame">Exame</option>
                                    <option value="exame_paciente">Exame do paciente</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-4" style="text-align: center">
                                <button type="submit" class="btn btn-info btn-block" onclick="setURL()">Enviar</button>
                                <button type="reset" class="btn btn-danger btn-block">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>