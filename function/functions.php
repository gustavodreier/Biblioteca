<?php



function geraPath() {
	//descobre a raiz
	$root = $_SERVER['DOCUMENT_ROOT']."/Biblioteca";
	//descobre caminho relativo
	$dir = str_replace($root, "", getcwd());
	$path = "";
	//contao numero de pastas de distancia da raiz
	$aux = substr_count($dir, '/');
	for ($i=0;$i < $aux;$i++) {
        	$path .= "../";
	}
	//retorna escape para encontrar a raiz (../)
	return $path;
}


function geraLabel($field,$type) {
	//echo "passou!<br />";
	return '<label for="'.$field.'">'.$field.'</label><input name="'.$field.'" size="31" type="text"/><br />';

}

?>
