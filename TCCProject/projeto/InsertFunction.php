<?php
    require 'vendor/autoload.php';


    if(isset($_POST['Registrar'])){
            $nome = $_POST['nome'];
            $RA = $_POST['RA'];
            $CPF = $_POST['CPF'];
            $Curso = $_POST['Curso'];
            $Imagem = $_POST['Imagem'];
            InsertAluno($nome, $RA, $CPF, $Curso, $Imagem);
    }
    

Function InsertAluno($nome, $RA, $CPF, $Curso, $Imagem){
    
    $uri = "mongodb+srv://tcc:tcc1popo@cluster0.gchakxj.mongodb.net/?retryWrites=true&w=majority";
    $databaseName = "BaseDadosTCC";


    try {
        $client = new MongoDB\Client($uri);
        $database = $client->selectDatabase($databaseName);

        $collection = $database->selectCollection('alunos');

        $insertOneResult = $collection->insertOne([
            'nome' => $nome,
            'RA' => $RA,
            'CPF' => $CPF,
            'Pontos' => 0,
            'Curso' => $Curso,
            'Imagem' => $Imagem
        ]);

        printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
        var_dump($insertOneResult->getInsertedId());
    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "Erro na inserção: " . $e->getMessage();
    }
}