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
            justify-content: center;
            align-items: center;
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
    <title>Excluir Cliente</title>
</head>

<body bgcolor="lightsteelblue">
    <div class="container">
        <div>
        <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
            <h2>Excluir Cliente</h2>
             <hr>
        </div>
        <div class="container-div">
            <form method="POST" action="excluir_cliente_backend.php">
            <p><br>
            ID Cliente: <select size="1" name="id_nome">
            <option>Selecione o ID<option>
            <?php
            include "conexao.php";
            $res=mysql_query("select * from cliente");
            while ($registro=mysql_fetch_row($res))
            {
            $cod=$registro[0];
            $descricao=$registro[1];
            echo "<option value=\"$cod\">$descricao</option>\n";
            }
            ?>
            </select>
            </p>
            <input type="submit" name="Submit" value="Excluir">
            </form>
        </div>            
    </div>
</body>
</html>