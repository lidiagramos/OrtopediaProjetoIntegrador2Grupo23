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
    <title>Serviços</title>
</head>
<body>
    <div class="container">
        <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
        <h2>Explorar</h2>
        <p>Clínicas de ortopedia e traumatologia</p>
        <hr>
        <form>
        <p><input type="text" placeholder="Pesquisar"></p>
        </form>
        <hr>
        <h3>Clínica Especializada em Ortopedia</h3>
        <p>Av. Brasil, 1500</p>
        <p>Jardins - São Paulo</p>
        <p>(11) 4059-1518</p>
        <hr>
        <h3>Hospital Dos Ossos</h3>
        <p>Av. Nove de Julho, 854</p>
        <p>Centro - São Paulo</p>
        <p>(11) 95498-5752</p>
        <hr>
        <h3>Clínica Ortopedia Infantil</h3>
        <p>Av. Alda, 1190</p>
        <p>Centro - São Paulo</p>
        <p>(11) 92265-8188</p>
        <hr>
        <h3>HS  Esp. Traumatologia </h3>
        <p>Av. Nações Unidas, 197</p>
        <p>Centro - São Paulo</p>
        <p>(11) 93089-1109</p>
        <hr>
    </div>
</body>
</html>
