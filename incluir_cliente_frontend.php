<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="formata_padrao.css">
    <style>
        h2{
            text-align: center;
        }
        body {
            background-color: #D9D9D9;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        select{
            background-color: #efddcb;
            color: #6e7174;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container {
            padding: 20px;
            width: 90%;
            max-width: 400px;
            box-sizing: border-box;
        }

        .container form {
            background-color: #D9D9D9;
            display: flex;
            flex-direction: column;
            font-weight: bold;

        }

        .container form p {
            margin: 0;
            padding: 0;
        }

        .container form input[type="text"],
        .container form input[type="number"] {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%;
        }

        .container form input[type="submit"] {
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .container form input[type="button"] {
            background-color: #A0A0A0;
            color: black;
        }
        .container form input[type="date"] {
            color: black;
            font-weight: bold;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container form input[type="submit"] {
            background-color: #A0A0A0;
            color: black;
            font-weight: bold;
        }
        .container-div {
            display: flex;
            gap: 10px;
        }
    </style>
    <title>Incluir Cliente</title>
</head>
<body>
    <div class="container">
        <div>
        <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
            <h2>Criar Cliente</h2>
             <hr>
        </div>
        <form method="POST" action="incluir_cliente_backend.php">
            <p>* Nome: <input type="text" name="nome_cliente" placeholder="Nome completo"></p>
            <div class="container-div">
                <div>
                    <p>* CPF: <input type="text" name="cpf_cliente" placeholder="000.000.000-00"></p>
                </div>
                <div>
                    <p>* Gênero: <select size="1" name="genero">
                    <option>Selecione o sexo<option>

                    <?php

                    include "conexao.php";

                    $res=mysql_query("select * from genero");
                    while ($registro=mysql_fetch_row($res))
                    {
                    $cod2=$registro[1];

                    echo "<option value=\"$cod2\">$cod2</option>\n";
                    }
                    ?>
                    </select></p>
                </div>
            </div>
            <p>* E-mail: <input type="text" name="email" placeholder="Digite seu e-mail"></p>
            <div class="container-div">
                <div>
                    <p>* Celular: <input type="text" name="celular" placeholder="(00)00000-0000"></p>
                </div>
                <div>
                    <p>* Telefone Fixo: <input type="text" name="telefone_fixo" placeholder="(00)0000-0000"></p>
                </div>
            </div>
            <p>* Data de Nascimento: </p>
            <p><input type="date" name="data_nascimento"></p>
            <p>* Senha: <input type="text" name="senha" placeholder="Digite sua senha"></p>
            <input type="submit" name="Submit" value="Finalizar Cadastro">
        </form>
    </div>
</body>
</html>
