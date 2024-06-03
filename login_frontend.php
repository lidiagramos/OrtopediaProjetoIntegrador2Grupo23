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
        .container form input[type="submit"] {
            background-color: #A0A0A0;
            color: black;
            font-weight: bold;
        }
        .container-div {
            display: flex;
            gap: 10px;
        }
        .center {
            text-align: center;
        }
        .responsive-img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <title>Incluir Cliente</title>
</head>
<body>
    <div class="container">
        
    <img src="img/3.jpeg" alt="Descrição da Imagem" class="responsive-img">

        <form method="POST" action="login_backend.php">
            <p>E-mail ou CPF: <input type="text" name="idpessoa" placeholder="Digite seu e-mail ou CPF"></p>
            <p>Senha: <input type="text" name="idpessoa" placeholder="Digite sua senha"></p>
            <input type="submit" name="Submit" value="Entrar">
            <p class="center">OU</p>
            <div>
                <hr>
            </div>
            <input type="submit" name="Submit" value="Criar Conta">
        </form>
    </div>
</body>
</html>
