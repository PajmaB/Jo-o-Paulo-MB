<?php require 'esqueleto.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/cD.css" rel="stylesheet">
    <title>Carregar</title>
</head>
<body>
    <div class='boxInfos'>
        <form method="get">

            <p>Valor em real:</p>
            <input type="text" name="valorCarregar" placeholder='R$1,99'>
            <br>
            <p>Forma de pagamento:</p>
            <p>
            <input type='radio' id='paypal' name='formaPagamento' value='1'>
            Pay-Pal
            </p>
            <p>
            <input type='radio' id='Mercado Pago' name='formaPagamento' value='2'>
            Mercado Pago
            </p>
            <p>
            <input type='radio' id='paypal' name='formaPagamento' value='3'>
            Boleto
            </p>

            <br><br>

            <input type="submit" value="Seguir para o pagamento">
        </form>
    </div>
</body>
</html>