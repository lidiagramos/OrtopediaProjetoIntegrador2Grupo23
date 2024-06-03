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
            gap: 10px;
            justify-content: center;
            align-items: center;
            text-align: left;
        }
        .container-div div {
            text-align: left;
        }
        .botao{
            background-color: red;
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
        .botao2{
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
        .responsive-img {
            max-width: 50%;
            height: auto;
        }
    </style>
    <title>Agenda</title>
</head>
<body>
    <div class="container">
        <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">      
        <h2>Minhas Reservas</h2>
        <hr>
        <p><b>HS Esp. Traumatologia</b></p>
        <p>Especialistas em traumas</p><br>  
        <div class="container-div">
            <div>
            <img src="img/14.png" alt="Descrição da Imagem" class="responsive-img">  
            </div>
            <div>
            <p>22/02/2024</p><br>        
            </div>
            <div>
            <img src="img/15.png" alt="Descrição da Imagem" class="responsive-img">  
            </div>
            <div>
            <p>09:30</p><br>        
            </div>
        </div>
        <div class="container-div">
            <div>
            <img src="img/16.png" alt="Descrição da Imagem" class="responsive-img">  
            </div>
            <div>
            <p>R$300,00</p><br>        
            </div>
            <div>
            <img src="img/17.png" alt="Descrição da Imagem" class="responsive-img">  
            </div>
            <div>
            <p>Av. Nações Unidas, 197</p>  
            <p>Centro - São Paulo</p>
            <p>(11) 93089-1109</p>  
            </div>
        </div>
       
    
        <form>
        <div class="container-div">
            <div>
                <input type="button" value="Reagendar" class="botao2">
            </div>
            <div>
                <input type="button" value="Excluir Reserva" class="botao">
            </div>
        </div>
        </form>
        <hr>
        <div class="container-div">
            <div>
            <img src="img/14.png" alt="Descrição da Imagem" class="responsive-img">  
            </div>
            <div>
            <p>20/03/2024</p><br>        
            </div>
            <div>
            <img src="img/15.png" alt="Descrição da Imagem" class="responsive-img">  
            </div>
            <div>
            <p>14:20</p><br>        
            </div>
        </div>
        <div class="container-div">
            <div>
            <img src="img/16.png" alt="Descrição da Imagem" class="responsive-img">  
            </div>
            <div>
            <p>R$200,00</p><br>        
            </div>
            <div>
            <img src="img/17.png" alt="Descrição da Imagem" class="responsive-img">  
            </div>
            <div>
            <p>Av. Nove de Julho, 854</p>  
            <p>Centro - São Paulo</p>
            <p>(11) 95498-5752</p>  
            </div>
        </div>
        <form>
        <div class="container-div">
            <div>
                <input type="button" value="Reagendar" class="botao2">
            </div>
            <div>
                <input type="button" value="Excluir Reserva" class="botao">
            </div>
        </div>
        </form>
        <hr>
        
    
    </div>
</body>
</html>
