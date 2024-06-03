<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        table {
            width: 100%;
            max-width: 1000px;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h4 {
            margin: 0;
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
                width: 100%;
            }

            thead tr {
                display: none;
            }

            tr {
                margin-bottom: 15px;
            }

            td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            td:before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
            }
        }

        .button-container {
            margin: 20px 0;
        }

        .button-container input {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
        }

        .button-container input:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    error_reporting(0);
    $db = mysql_connect("127.0.0.1", "root", "vertrigo");
    mysql_select_db("pti_database", $db);
    $result = mysql_query("select * from cliente", $db);
    echo "<table>
    <thead>
    <tr>
        <th><h4>ID</h4></th>
        <th><h4>Nome</h4></th>
        <th><h4>CPF</h4></th>
        <th><h4>Gênero</h4></th>
        <th><h4>E-mail</h4></th>
        <th><h4>Celular</h4></th>
        <th><h4>Telefone Fixo</h4></th>
        <th><h4>Data de Nascimento</h4></th>
        <th><h4>Senha</h4></th>
    </tr>
    </thead>
    <tbody>";
    while($row = mysql_fetch_array($result)) {
        echo "<tr>
            <td data-label='ID'>".$row["id_nome"]."</td>
            <td data-label='Nome'>".$row["nome_cliente"]."</td>
            <td data-label='CPF'>".$row["cpf_cliente"]."</td>
            <td data-label='Gênero'>".$row["genero"]."</td>
            <td data-label='E-mail'>".$row["email"]."</td>
            <td data-label='Celular'>".$row["celular"]."</td>
            <td data-label='Telefone Fixo'>".$row["telefone_fixo"]."</td>
            <td data-label='Data de Nascimento'>".$row["data_nascimento"]."</td>
            <td data-label='Senha'>".$row["senha"]."</td>
        </tr>";
    }
    echo "</tbody></table>";
    mysql_free_result($result);
    mysql_close($db);
    ?>
    <div class="button-container">
        <form>
            <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
        </form>
    </div>
</body>
</html>
