<?php require 'esqueleto.php';

    if(isset($_SESSION['RA'])){    

    $ra = $_SESSION['RA'];
    
    $filtro = ['RA' => $ra];

    $conexao = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        
    $colecao = "TccDB.alunos";

    $query = new MongoDB\Driver\Query($filtro);

    $documento = $conexao->executeQuery($colecao, $query)->toArray()[0];
    }
?>
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
            width: 95vw;
            margin: 1px;
            background-color: #f0f0f0;
        }

        .container {
            width: 80%;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Fundo com efeito de desfoque */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Sombra suave */
            border-radius: 10px; /* Cantos arredondados */
            position: relative; /* Define um contexto de empilhamento para os elementos filhos */
            z-index: 1; /* Z-index para a tabela */
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 10px;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        .paragrafo {
            text-align: left;
            padding-bottom: 10px; /* Adiciona um espaçamento abaixo do parágrafo */
        }

        .card {
            padding: 20px;
            width: 200px;
            height: 50px;
            background-color: #3498db; /* Cor de fundo do card */
            color: #fff; /* Cor do texto no card */
            border-radius: 5px; /* Cantos arredondados do card */
            margin: 5px; /* Espaçamento entre os cards */
        }

        .page {
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <table>
        <tr>
            <td class="paragrafo" colspan="3">
                <p>Pontos:<?php echo "$documento->Pontos"; /*depois colocar aqui o mongodb puxando os pontos do aluno !*/ ?></p>
            </td>
        </tr>
        <tr>
            <td class="card"><img src="./svg's/bolsaestudos.png" height='150px' width="170px"><br><h3>Bolsa de estudos</h3><br><h4>1000 pontos</h4></td>
            <td class="card"><img src="./svg's/airfryer.jpg" height='150px' width="170px"><br><h3>Air Fryer</h3><br><h4>500 pontos</h4></td>
            <td class="card"><img src="./svg's/bolsaestudos.png" height='150px' width="170px"><br><h3>Bolsa de estudos</h3><br><h4>1000 pontos</h4></td>
        </tr>
    </table>
</div>

</body>
</html>