
<?php 
Function conexao(){
    require 'vendor/autoload.php';

    $uri = "mongodb+srv://jptcc:Rkm7pouP6dYTumoR@cluster0.3aamnd7.mongodb.net/";
    $databaseName = "TccDB";

    try {
        // Cria uma nova conexão
        $client = new MongoDB\Client($uri);

        // Seleciona o banco de dados
        $database = $client->selectDatabase($databaseName);

        echo "Conexão com o MongoDB estabelecida com sucesso!";
    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "Erro na conexão com o MongoDB: " . $e->getMessage();
    }
    }
?>