<?php require 'esqueleto.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <title>Eventos</title>
    <style>
        .table-container {
            width: 80%;
            margin: 20px auto;
            overflow-x: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.8);
          }
      
        table {
            width: 100%;
            border-collapse: collapse;
          }
      
        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            max-width: 20px;
            max-height: 100px;
            border: 1px black solid;  
            overflow: hidden;
            text-overflow: ellipsis;
            border-radius: 8px;
          }
      
        th {
            background-color: #4CAF50;
            color: white;
          }
      
        tr:hover {
            background-color: #f5f5f5;
          }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .button {
            background-color: #FFA500;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-family: acme;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .button a {
            text-decoration: none;
            color: white;
        }
        
        .scrollable {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    
    <div class="content">
        <aside>
        <h1    style ='margin: 1px;'>Eventos Escolares</h1>
        <h2>Eventos realizados pela escola para atribuição de pontos e para interação entre alunos.</h2>
        </aside>
        <br><br>
        <div class="table-container">
        <table>
        <tbody class="scrollable">
        <tr>
            <td><img src="./svg's/promover-eventos-na-escola.jpg" width="150px" height="150px"><br><h3>Evento1</h3><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Auctor neque vitae tempus quam pellentesque. A condimentum vitae sapien pellentesque habitant morbi tristique senectus et. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula ipsum. Et ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Elementum facilisis leo vel fringilla est ullamcorper eget nulla. Augue eget arcu dictum varius. Fames ac turpis egestas sed tempus urna et pharetra pharetra. Facilisi morbi tempus iaculis urna id volutpat lacus. Volutpat blandit aliquam etiam erat velit scelerisque.</p><br><div class='button-container'><button class='button'><a href='#'>SAIBA MAIS</a></button></div></td>
            <td><img src="./svg's/expoweek.jpg" width="150px" height="150px"><br><h3>Fatec ExpoWeek</h3><br><p>A Fatec Osasco é uma instituição pública de ensino superior administrada pelo Centro Paula Souza, autarquia vinculada à Secretaria de Desenvolvimento Econômico, Ciência, Tecnologia e Inovação do estado de São Paulo A FATEC ExpoWeek é um evento realizado ao longo de três dias, voltados inteiramente para novas tecnologias e tendências do mercado. O evento utiliza a Quinta-feira e Sexta-feira para circuito de palestras com profissionais relevantes de mercado, e no Sábado acontece a Mostra de Projetos da Fatec, bem como de Etecs, Escolas Estaduais e Empresas, objetivando a demonstra de soluções inovadoras, criativas e dinâmicas para situações do cotidiano. O resultado é o rompimento de paradigmas, criando tendências...</p><br><div class='button-container'><button class='button'><a href='https://www.sympla.com.br/evento/fatec-expoweek/2174811?referrer=www.google.com'>SAIBA MAIS</a></button></div></td>
            <td><img src="./svg's/promover-eventos-na-escola.jpg" width="150px" height="150px"><br><h3>Evento1</h3><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Auctor neque vitae tempus quam pellentesque. A condimentum vitae sapien pellentesque habitant morbi tristique senectus et. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula ipsum. Et ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Elementum facilisis leo vel fringilla est ullamcorper eget nulla. Augue eget arcu dictum varius. Fames ac turpis egestas sed tempus urna et pharetra pharetra. Facilisi morbi tempus iaculis urna id volutpat lacus. Volutpat blandit aliquam etiam erat velit scelerisque.</p><br><div class='button-container'><button class='button'><a href='#'>SAIBA MAIS</a></button></div></td>
        </tr>
        
        </tbody>
    </table>
    </div>
    </div>
</body>
</html>