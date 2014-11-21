<?php
$conn = mysql_connect('localhost', 'usuario', 'senha');
if (!$conn) {
    die('Não foi possível conectar: ' . mysql_error());
}
mysql_select_db('biblioteca');
//$result = mysql_query('select * from pessoa');
$result = mysql_query('show fields from pessoa');

if (!$result) {
    die('A consulta falhou: ' . mysql_error());
}
/* obtém as informações da coluna */
$i = 0;
while ($i < mysql_num_fields($result)) {
	$dados = mysql_fetch_array($result);
	echo '<label for="'.$dados['Field'].'">'.$dados['Field'].'</label><input name="'.$dados['Field'].'" size="31" type="text"/><br />';
	//echo $dados['Field'].'<br />';
	//echo $dados['Type'].'<br/>';
	$i++;
}

/*
$i = 0;
while ($i < mysql_num_fields($result)) {
    echo "Informação para a coluna $i:<br />\n";
    $meta = mysql_fetch_field($result, $i);
    if (!$meta) {
        echo "Sem informação disponível<br />\n";
    }
    echo "<pre>
blob:         $meta->blob
max_length:   $meta->max_length
multiple_key: $meta->multiple_key
name:         $meta->name
not_null:     $meta->not_null
numeric:      $meta->numeric
primary_key:  $meta->primary_key
table:        $meta->table
type:         $meta->type
default:      $meta->def
unique_key:   $meta->unique_key
unsigned:     $meta->unsigned
zerofill:     $meta->zerofill
</pre>";
    $i++;
}
mysql_free_result($result);
*/
?>