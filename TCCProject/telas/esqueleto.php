<?php
    session_start();

    if(isset($_SESSION['RA'])){    

    $ra = $_SESSION['RA'];
    
    $filtro = ['RA' => $ra];

    $conexao = new MongoDB\Driver\Manager("mongodb+srv://tcc:tcc1popo@cluster0.gchakxj.mongodb.net/?retryWrites=true&w=majority");
        
    $colecao = "BaseDadosTCC.alunos";

    $query = new MongoDB\Driver\Query($filtro);

    $documento = $conexao->executeQuery($colecao, $query)->toArray()[0];
    }
?>
<!DOCTYPE html>
<html>
      
<head>
    <title>Home page</title>
    <link href="./css/style.css" rel="stylesheet">
    <link rel="icon" href="./svg's/image-removebg-preview__1_-removebg-preview.png" type="image/x-icon" />
    <style>
        .imagem-botao {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-image: url("./svg's/logout.svg");
            background-size: cover;
            border: none;
            cursor: pointer;
        }
    </style>
        <script>
        function trocarPagina() {
        document.getElementById('page1').classList.toggle('page-hidden');
        document.getElementById('page2').classList.toggle('page-hidden');
    }
</script>
    </script>
</head>
  
<body style="text-align:center;">
<div class="background-image">
</div>
<div class="sidebar">
        <ul>
            <li><img <?php echo "src='$documento->Imagem'" ?> style="border-radius:50%" width="150px" height='150px'></li>
            <li><?php echo "$documento->nome" ?></li>
            <br><br>
            <li><br><a href="telaEventos.php" onclick='trocarPagina()'><img src="./svg's/megaphone-bold.svg" width='30px' height="30px"><br>Eventos</a></li>
            <li><a href="telaAulasFaltas.php" onclick='trocarPagina()'><img src="./svg's/Group 3.svg" width='30px' height="30px"><br>Aulas e Faltas</a></li>
            <li><a href="pontos.php" onclick='trocarPagina()'><img src="./svg's/money.svg" width='30px' height="30px"><br>Pontos</a></li>
            <li><a href="carregarDigital.php"><img src="./svg's/paid.svg" width='30px' height="30px"><br>Carregar Digital</a></li>
            <br><br>
            <form action='logout.php' method='post'>
                <input type='submit' value='' class='imagem-botao'>
            </form>
        </ul>
    </div>
    <div class="content">
    </div>
</body>
  
</html>