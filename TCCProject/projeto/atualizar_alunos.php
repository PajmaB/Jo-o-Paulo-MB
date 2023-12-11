<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Alunos</title>
    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript" ></script>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
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
        <h1>Atualizar Alunos</h1>

        <!-- Formulário de pesquisa -->
        <form method="post">
            <label for="ra">RA (Registro de Aluno):</label>
            <input type="text" name="ra" id="ra" required>
            <input type="submit" name="pesquisar" value="Pesquisar">
        </form>

        <?php

        if (isset($_POST['pesquisar'])) {
            $ra = $_POST['ra'];

            // Conexão com o MongoDB
            $conexao = new MongoDB\Driver\Manager("mongodb+srv://tcc:tcc1popo@cluster0.gchakxj.mongodb.net/?retryWrites=true&w=majority");

            // Nome da coleção
            $colecao = "BaseDadosTCC.alunos"; // Substitua pelo nome da sua coleção

            // Filtro para encontrar o aluno pelo RA
            $filtro = ['RA' => $ra];

            // Consulta para buscar o aluno pelo RA
            $query = new MongoDB\Driver\Query($filtro);
            $aluno = current($conexao->executeQuery($colecao, $query)->toArray());

            if ($aluno) {
                // Exiba os campos do aluno e permita a atualização
                ?>
                <form method="post">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $aluno->nome; ?>" required><br>
                    <br>
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" value="<?php echo $aluno->CPF; ?>" required><br>
                    <br>
                    <label for="pontos">Pontos:</label>
                    <input type="text" name="pontos" id="pontos" value="<?php echo $aluno->Pontos; ?>" required><br>
                    <br>
                    <label for="curso">Curso:</label>
                    <input type="text" name="curso" id="curso" value="<?php echo $aluno->Curso; ?>" required><br>
                    <input type="hidden" name="ra" value="<?php echo $ra; ?>">
                    <br>
                    <button id="upload_widget" class="cloudinary-button" type="button">
                    Carregar Imagem
                    </button>
                    <br><br>
                    <img id="uploadedimage" src="<?php echo $aluno->Imagem ?>" height="200px" width="150px"><br>
                    <input type='text' name='Imagem' id="paraenviar" value="<?php echo $aluno->Imagem ?>">
                    <script src="teste.js" type="text/javascript">
                    </script>
                    <br><br>
                    <input type="submit" name="atualizar" value="Atualizar">
                </form>
                <?php
            } else {
                echo "Nenhum aluno encontrado com o RA fornecido.";
            }
        }

        if (isset($_POST['atualizar'])) {
            // Obtém os valores do formulário
            $ra = $_POST['ra'];
            $imagem = $_POST['Imagem'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $pontos = $_POST['pontos'];
            $curso = $_POST['curso'];

            // Configurações de conexão com o MongoDB
            $conexao = new MongoDB\Driver\Manager("mongodb+srv://tcc:tcc1popo@cluster0.gchakxj.mongodb.net/?retryWrites=true&w=majority");

            // Nome da coleção
            $colecao = "BaseDadosTCC.alunos"; // Substitua pelo nome da sua coleção

            // Filtro para encontrar o aluno pelo RA
            $filtro = ['RA' => $ra];

            // Atualize os campos do aluno no MongoDB
            $atualizacao = [
                '$set' => [
                    'nome' => $nome,
                    'CPF' => $cpf,
                    'Pontos' => $pontos,
                    'Curso' => $curso,
                    'Imagem' => $imagem
                ],
            ];

            $atualizacaoQuery = new MongoDB\Driver\BulkWrite();
            $atualizacaoQuery->update($filtro, $atualizacao);

            // Execute a atualização
            $conexao->executeBulkWrite($colecao, $atualizacaoQuery);

            // Exiba uma mensagem de sucesso
            echo "Aluno atualizado com sucesso!";
        }
        ?>
    </div>
</body>
</html>