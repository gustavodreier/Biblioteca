<?php

include("../head.php");
include("../include/conexao.php");

if (isset($_POST['enviar'])) {

        echo '<form action="muda_genero.php" method="post">';
        echo '<h3>Selecione o genero.</h3>';
        $query = "SELECT nome,descricao FROM genero WHERE id='".$_POST['id']."'";
        $consulta = mysql_query($query) or die("Erro 1 - ".mysql_error());
        $array = mysql_fetch_array($consulta);
        echo '<p>Nome:<input name="nome" size="20" maxlenght="50" value="'.$array['nome'].'" type="text"/><br/>';
        echo '<p>Descricao:<input name="desc" size="50" maxlenght="50" value="'.$array['descricao'].'" type="text"/><br/>';
        echo '<center><input name="enviar" type="submit" value="Enviar" class="botao"/></center>';

} else {
?>
        <form action="altera_genero.php" method="post">
        <h3>Selecione o genero</h3>

        <div>
        <select name="id">
                <?php
                        $consulta = mysql_query('select id,nome,descricao from genero where 1=1') or die(mysql_error("Problema na consulta."));
                        for ($i = 0;$i < mysql_num_rows($consulta);$i++) {
                                $dados = mysql_fetch_array($consulta);
                                echo "<option value=".$dados['id'].">".$dados['nome']."</option>";
                        }

                ?>
        <select>
        <center><input name="enviar" type="submit" value="Enviar" class="botao"/></center>
        </div>
        </form>
<?php

}//fim else



include($path."tail.php");
?>
