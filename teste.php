<?php

$root = $_SERVER['DOCUMENT_ROOT']."/Biblioteca";
$dir = str_replace($root, "", getcwd());

echo $root."\n";
echo getcwd()."\n";

echo $dir;

?>
