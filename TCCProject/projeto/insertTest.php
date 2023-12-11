
<?php
    require_once 'Conexao.php';

    require 'vendor/autoload.php'; // include Composer's autoloader

    $collection = (new MongoDB\Client)->BaseDadosTCC->teste;

    $insertOneResult = $collection->insertOne(['nome_text' => 'marquinhos', 'RA' => 'RAdoMarquinhos25023', 'CPF' => 'cpfdomarquinhos', 'pontos' => 0, 'Curso' => 'CursoDeFoda']);
    
    printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
    
    var_dump($insertOneResult->getInsertedId());