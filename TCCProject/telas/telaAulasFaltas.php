<?php require 'esqueleto.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            padding-right: 5%;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid #ddd;
        }
        tr td a {
            text-decoration: none;
            color: black;
        }

        th {
            background-color: #f2f2f2;
        }

        .spacer {
            padding-right: 50px;
        }

        .divider {
            border-right: 2px solid black;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th class="spacer">Matéria</th>
            <th class="divider">Aulas</th>
            <th>Faltas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="spacer"><a href='telaAulaSelected.php'>Química</a></td>
            <td class="divider">10</td>
            <td>0</td>
        </tr>
        <tr>
            <td class="spacer">Nome da Matéria 2</td>
            <td class="divider">5</td>
            <td>0</td>
        </tr>
        <tr>
            <td class="spacer">Nome da Matéria 3</td>
            <td class="divider">10</td>
            <td>2</td>
        </tr>
        <tr>
            <td class="spacer">Nome da Matéria 4</td>
            <td class="divider">10</td>
            <td>2</td>
        </tr>
        <tr>
            <td class="spacer">Nome da Matéria</td>
            <td class="divider">10</td>
            <td>2</td>
        </tr>
        <tr>
            <td class="spacer">Nome da Matéria 2</td>
            <td class="divider">5</td>
            <td>0</td>
        </tr>
        <tr>
            <td class="spacer">Nome da Matéria 3</td>
            <td class="divider">10</td>
            <td>2</td>
        </tr>
        <tr>
            <td class="spacer">Nome da Matéria 4</td>
            <td class="divider">10</td>
            <td>2</td>
        </tr>
    </tbody>
</table>

</body>
</html>