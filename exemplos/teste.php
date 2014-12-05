<?php

$root = $_SERVER['DOCUMENT_ROOT']."/Biblioteca";
$dir = str_replace($root, "", getcwd());
$path = ".";

$aux = substr_count($dir, '/'); 
for ($i=0;$i < $aux;$i++) {
	$path .= "../";
}


echo $root."<br/>";
echo getcwd()."<br/>";

echo $dir."<br/>";
echo $path;

?>
