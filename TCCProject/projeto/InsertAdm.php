<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Aluno</title>
    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript" ></script>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <style>
        #form{
            margin: auto;
            text-align: center;
            padding: 5vw;
        }
    </style>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
        }

        /*Menu*/
        #menu {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        #menu ul {
            list-style-type: none;
            padding: 0;
        }

        #menu ul li {
            display: inline;
            margin-right: 20px;
        }

        #menu ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        #menu ul li a:hover {
            text-decoration: underline;
        }

        /* Pequenas alteraçoes */
    </style>
</head>
<body>
<body>
    <div id="menu">
            <ul>
                <li><a href="InsertAdm.php">Registro</a></li>
                <li><a href="exibir_alunos.php">Exibir Alunos</a></li>
                <li><a href="atualizar_alunos.php">Atualizar Alunos</a></li>
            </ul>
    </div>
    <div id ='form'>
        <h1>Cadastrar Aluno</h1>
        <br><br>
        <form method="POST" class="registro" action='InsertFunction.php' enctype="multipart/form-data">
            <br>
           <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                <input type="text" name="nome" placeholder="Mais ou Menos de Souza.">
            <br><br>
                <label for="exampleFormControlInput1" class="form-label">RA:</label>
                <input type="numeric" name="RA" placeholder="25040">
            <br><br>
                <label for="exampleFormControlInput1" class="form-label">CPF:</label>
                <input type="text" class="form-control" name="CPF" placeholder="123.456.789-01">
            <br><br>
                <label for="exampleFormControlInput1" class="form-label">Curso:</label>
                <input type="text" name="Curso" placeholder="Desenvolvimento de Sistemas">
                <br><br>
                <button id="upload_widget" class="cloudinary-button" type="button">
                    Carregar Imagem
                </button>
                <br><br>
                <img id="uploadedimage" src="" height="200px" width="150px"><br>
                <input type='text' name='Imagem' id="paraenviar" value="">
                <script src="teste.js" type="text/javascript">
                </script>
                <br><br>
                <input type="submit" value="Registrar" name="Registrar" maxlenght="15">
                <br>
            </form>
                
    </div>
</body>
</html>
<!-- document.getElementById("app").innerHTML =`
            <div>
                <button id="upload_widget" class="cloudinary-button">upload files</button>
            </div>
        `; -->