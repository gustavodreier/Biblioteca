<?php
@SESSION_START();
        // mensagens de erro
$msg[0] = " Conexao com o banco falhou!";
$msg[1] = "Nao foi possivel selecionar o banco de dados!";

//fazendo a conexao com o servidor mysql
mysql_connect("localhost","usuario","senha")or die ($msg[0]);
mysql_select_db("biblioteca") or die ($msg[1]);
?>