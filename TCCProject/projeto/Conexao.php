
<?php 

    require 'vendor/autoload.php';

    $uri = "mongodb://localhost:27017/";
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
    
?>