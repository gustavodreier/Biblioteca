<script language= "JavaScript">
function setURL() {
var a = document.getElementById('tipo').value;
var b = document.getElementById('tabela').value;
//b = a.options[a.selectedIndex].value;
var url = "";
if (b == "exame_paciente") {
alert("Ainda não implementado");
} else if (a == "cadastro" || a == "atualizar") {
url = './controller/cadastro_' + b +'.php';
} else if (a == "consulta" || a == "remover") {//ainda nao pensado como vai ficar
url = './controller/' + a + '.php?tabela=' + b;
} else {
alert("Ainda não implementado");
}
document.formulario.action = url;
document.formulario.submit();
}
</script>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Formulário</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<form action="index.php" name='formulario' method="post">
<fieldset>
<legend>Selecione as opçoes desejadas</legend>
<select id="tipo">
<option id="tipo" value="cadastro">Cadastrar</option>
<option id="tipo" value="atualizar">Atualizar</option>
<option id="tipo" value="remover">Remover</option>
<option id="tipo" value="consulta">Consultar</option>
<!--
<option value=""></option>
<option value=""></option>
-->
</select>
<select id="tabela">
<option value="medico">Medico</option>
<option value="paciente">Paciente</option>
<option value="exame">Exame</option>
<option value="exame_paciente">Exame do paciente</option>
<!--
<option value=""></option>
<option value=""></option>
-->
</select>
<input name="enviar" type="submit" value="Enviar" onClick="setURL()"/>
<input name="cancelar" type="reset" value="Limpar"/>
</fieldset>
</form>
</body>
</html>