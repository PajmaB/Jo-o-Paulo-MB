<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Aluno</title>
    <style>
        #form{
            margin: auto;
            text-align: center;
            padding: 5vw;
        }
    <style>
        /* Estilos CSS (mesmos estilos do menu anterior) */
        body {
            font-family: Arial, sans-serif;
        }

        #menu {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        #menu ul {
            list-style-type: none;
            padding: 0;
        }

        #menu ul li {
            display: inline;
            margin-right: 20px;
        }

        #menu ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        #menu ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="menu">
        <ul>
            <li><a href="InsertAdm.php">Registro</a></li>
            <li><a href="exibir_alunos.php">Exibir Alunos</a></li>
            <li><a href="atualizar_alunos.php">Atualizar Alunos</a></li>
        </ul>
    </div>

    <div id='form'>
        <h1>Consultar Alunos</h1>

        <!-- Formulário de pesquisa -->
        <form method="post">
            <label for="codigo">Código RA:</label>
            <input type="text" name="codigo" id="codigo" required>
            <input type="submit" name="pesquisar" value="Pesquisar">
        </form>

        <?php
        // Configurações de conexão com o MongoDB
        $conexao = new MongoDB\Driver\Manager("mongodb://localhost:27017");

        if (isset($_POST['pesquisar'])) {
            // Verifique se o botão "Pesquisar" foi clicado
            $codigo = $_POST['codigo'];

            // Nome da coleção
            $colecao = "TccDB.alunos"; 

            // Filtro para pesquisar pelo código
            $filtro = ['RA' => $codigo];

            // Use findOne para buscar um único documento
            $query = new MongoDB\Driver\Query($filtro);
            $documento = $conexao->executeQuery($colecao, $query)->toArray()[0];

            if ($documento) {
                // Exiba os campos do documento como desejar
                echo "Foto:<br> <img src='" . $documento->Imagem . " ' height='200px' width='150px'> <br>";
                echo "Nome: " . $documento->nome . "<br>";
                echo "RA: " . $documento->RA . "<br>";
                echo "CPF: " . $documento->CPF . "<br>";
                echo "Ponto: " . $documento->Pontos . "<br>";
                echo "Curso: " . $documento->Curso . "<br>";
            } else {
                echo "Nenhum documento encontrado com o código fornecido.";
            }
        }
        ?>
    </div>
</body>
</html>