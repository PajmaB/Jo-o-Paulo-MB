<?php
require 'vendor/autoload.php';

$uri = "mongodb+srv://tcc:tcc1popo@cluster0.gchakxj.mongodb.net/?retryWrites=true&w=majority";
try {
    $client = new MongoDB\Client($uri);
    echo "Conexão com o MongoDB estabelecida com sucesso!";
} catch (MongoDB\Driver\Exception\Exception $e) {
    echo "Erro na conexão com o MongoDB: " . $e->getMessage();
}

?>