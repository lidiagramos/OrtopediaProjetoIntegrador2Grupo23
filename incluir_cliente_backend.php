<?php

error_reporting(0);
$db = mysql_connect ("127.0.0.1","root","vertrigo");
mysql_select_db("pti_database",$db);
$nome_cliente1=$_POST['nome_cliente'];
$cpf_cliente1=$_POST['cpf_cliente'];
$genero1 =$_POST['genero'];
$email1=$_POST['email'];
$celular1=$_POST['celular'];
$telefone_fixo1=$_POST['telefone_fixo'];
$data_nascimento1=$_POST['data_nascimento'];
$senha1=$_POST['senha'];

$inserir = mysql_query("INSERT INTO cliente 
                (nome_cliente, cpf_cliente, genero, email, celular, telefone_fixo, data_nascimento, senha) 
		        VALUES('$nome_cliente1','$cpf_cliente1','$genero1','$email1','$celular1','$telefone_fixo1','$data_nascimento1','$senha1')")
                or die (mysql_error());
mysql_close ($db);

include "consulta_cliente.php";

?>