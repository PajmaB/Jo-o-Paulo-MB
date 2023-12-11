
<?php 

    require 'vendor/autoload.php';

    $uri = "mongodb+srv://tcc:tcc1popo@cluster0.gchakxj.mongodb.net/?retryWrites=true&w=majority";
    $databaseName = "BaseDadosTCC";

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