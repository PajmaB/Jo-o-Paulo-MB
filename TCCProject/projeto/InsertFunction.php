<?php
    require_once 'Conexao.php';
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

        $collection = (new MongoDB\Client) -> TccDB -> alunos;

        $insertOneResult = $collection->insertOne(
            ['nome' => $nome, 'RA' => $RA, 'CPF' => $CPF, 'Pontos' => 0, 'Curso' => $Curso, 'Imagem' => $Imagem]
        );
        return printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
        return var_dump($insertOneResult->getInsertedId());
    }