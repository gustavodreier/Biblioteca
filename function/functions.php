<?php

function geraLabel($field,$type) {
	//echo "passou!<br />";
	return '<label for="'.$field.'">'.$field.'</label><input name="'.$field.'" size="31" type="text"/><br />';

}

?>