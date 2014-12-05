<?php

$root = $_SERVER['DOCUMENT_ROOT']."/Biblioteca";
//descobre caminho relativo
$dir = str_replace($root, "", getcwd());
$path = "";
//contao numero de pastas de distancia da raiz
$aux = substr_count($dir, '/');
for ($i=0;$i < $aux;$i++) {
		$path .= "../";
}


require($path.'include/conexao.php');
include($path.'head.php');
include($path.'tail.php');
?>
