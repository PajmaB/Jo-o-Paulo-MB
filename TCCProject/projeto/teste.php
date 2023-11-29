<?php
require 'vendor/autoload.php';

\Cloudinary::config(array(
    "cloud_name" => "dpadciqjy",
    "api_key" => "919349799516152",
    "api_secret" => "k82_aSnjRj5Cs_4CCVBJh53N0Bg"
));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Processar o formulário (ou outras ações que você deseja executar)
    // ...

    // Agora, ative a seleção de imagem
    echo '<script>
        document.getElementById("upload_widget").click();
    </script>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
</head>
<body>
    <div>
        <form action="seu_script_de_registro.php" method="post" enctype="multipart/form-data">
            <!-- Campos do formulário -->
            <input type="file" name="imagem" id="imagemInput" style="display: none;">
            <button type="button" id="upload_widget" class="cloudinary-button">Carregar imagem</button>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>