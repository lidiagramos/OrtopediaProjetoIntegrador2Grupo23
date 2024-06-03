<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="formata_padrao.css">
    <style>
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
            background-color: #A0A0A0;
            color: black;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
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
            justify-content: space-between;
            align-items: center;
        }
        .container-div div {
            display: flex;
            flex-direction: column;
        }
    </style>
    <title>Estabelecimento</title>
</head>
<body>
    <div class="container">
        <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">

        <img src="img/10.jpeg" alt="Descrição da Imagem" class="responsive-img">

        
        <h3>Clínica Especializada em Ortopedia</h3>
        <p>Av. Brasil, 1500</p>
        <p>Jardins - São Paulo</p>
        <p>(11) 4059-1518</p>
        <hr>
        
        <h2>Serviços</h2>
        <br>
        <form>
        <div class="container-div">
            <div>
                <p>Consulta Dr. Alberto Souza</p>
                <p>R$300,00</p>
            </div>
            <div>
                <input type="button" value="Agendar">
            </div>
        </div>
        </form>
        <hr>
        <form>
        <div class="container-div">
            <div>
                <p>Consulta Dra. Maria Alice</p>
                <p>R$450,00</p>
                </div>
            <div>
                <input type="button" value="Agendar">
            </div>
        </div>
        </form>
        <hr>
        <form>
        <div class="container-div">
            <div>
                <p>Exame Ressonância da Perna</p>
                <p>R$620,00</p>
                </div>
            <div>
                <input type="button" value="Agendar">
            </div>
        </div>
        </form>
        <hr>
        <form>
        <div class="container-div">
            <div>
                <p>Raio-X</p>
                <p>R$270,00</p>
                </div>
            <div>
                <input type="button" value="Agendar">
            </div>
        </div>
        </form>
        <hr>
    </form>
    </div>
</body>
</html>
