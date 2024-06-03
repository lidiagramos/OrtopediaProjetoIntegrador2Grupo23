<?php
error_reporting(0);
include "conexao.php";
$id_nome1=$_POST['id_nome'];
$nome_cliente1=$_POST['nome_cliente'];
$cpf_cliente1=$_POST['cpf_cliente'];
$genero1=$_POST['genero'];
$email1=$_POST['email'];
$celular1=$_POST['celular'];
$telefone_fixo1=$_POST['telefone_fixo'];
$data_nascimento1=$_POST['data_nascimento'];
$senha1=$_POST['senha'];
				
$alterar = mysql_query("UPDATE cliente 
                    SET nome_cliente = '$nome_cliente1',
					cpf_cliente = '$cpf_cliente1', 
					genero = '$genero1',
					email = '$email1',
					celular = '$celular1',
					telefone_fixo = '$telefone_fixo1',
					data_nascimento = '$data_nascimento1',
					senha = '$senha1'
					WHERE id_nome = '$id_nome1'")
					 or die (mysql_error());
mysql_close ($db);
include "consulta_cliente.php";
?>