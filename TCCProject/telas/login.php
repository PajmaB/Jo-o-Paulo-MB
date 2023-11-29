<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
    <script>
        function formatarCPF(input) {
            let cpf= input.value.replace(/\D/g, '');
            cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
            cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
            cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');

            input.value = cpf;
        }
    </script>
</head>
<body>
    <div class='boxLogin'>
        <form  method='POST'>
            <label>RA: <input type="number" name="RA" id="RA"> </label><br><br>
            <label>CPF: <input type="text" name="cpf" maxlength="14" oninput="formatarCPF(this)"> </label><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>

<?php

        $ra = $_POST['RA'];
        $cpf = $_POST['cpf'];

        $conexao = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        
        $colecao = "TccDB.alunos"; 

        $filtro = ['RA' => $ra, 'CPF' => $cpf];

        $query = new MongoDB\Driver\Query($filtro);
        
        $documento = $conexao->executeQuery($colecao, $query)->toArray()[0];
        

        if ($documento){
            $_SESSION['RA'] = $ra;
            header("Location: esqueleto.php");
            exit();
        }
        else{

        }