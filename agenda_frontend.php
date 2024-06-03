<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="formata_padrao.css">
    <style>
        h2{
            text-align:center;
        }
        h3{
            color: black;
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

        }
        .responsive-img {
            max-width: 100%;
            height: auto;
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
            background-color: white;
            color: black;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container form input[type="date"] {
            color: black;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .container form input[type="submit"] {
            background-color: #A0A0A0;
            color: black;
        }
        .container-div {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .container-div div {
            display: flex;
            flex-direction: column;
        }
        .botao{
            background-color: #A0A0A0;
            color: black;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }
    </style>
    <title>Agenda</title>
</head>
<body>
    <div class="container">
        <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">      
        <h2>Fazer uma reserva</h2>
        <hr>  
        <img src="img/1.jpeg" alt="Descrição da Imagem" class="responsive-img">
        <hr>        
        <h3>Horário</h3>
        <form>
        <div class="container-div">
            <div>
                <input type="button" value="09:00">
            </div>
            <div>
                <input type="button" value="09:30">
            </div>
            <div>
                <input type="button" value="10:00">
            </div>
            <div>
                <input type="button" value="10:30">
            </div>
            <div>
                <input type="button" value="11:00">
            </div>
        </div>
        </form>
        <hr>
        <form>
            <p><b>* Selecione o Serviço:</b></p><br>
            <p><select size="1" name="id_profissional">
                    <option>Especialista em traumas<option>

                    <?php

                    include "conexao.php";

                    $res=mysql_query("select * from profissional");
                    while ($registro=mysql_fetch_row($res))
                    {
                    $cod2=$registro[1];

                    echo "<option value=\"$cod2\">$cod2</option>\n";
                    }
                    ?>
                    </select></p>
            <p><b>Serviço:</b> Especialista em  traumas</p><br>
            <p><b>Clínica:</b> HS Esp. Traumatologia</p><br>
            <p><b>Valor Total:</b> R$350,00</p>
        </form>
        <hr>
        
            <input type="button" value="Confirmar reserva" class="botao">
    
    </div>
</body>
</html>
