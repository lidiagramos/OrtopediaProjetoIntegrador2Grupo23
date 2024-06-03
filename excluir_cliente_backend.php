<?php
error_reporting(0);
include "conexao.php";
$id_nome1=$_POST['id_nome'];

$inserir = mysql_query("DELETE FROM cliente
						WHERE id_nome ='$id_nome1'") 
						or die (mysql_error());
mysql_close ($db);
include "consulta_cliente.php";
?>
