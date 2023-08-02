<?php
session_start();

// echo($_SESSION["emailconfirm"]);
// echo('<br>');
// echo($_SESSION["code"]);

if (isset($_GET['error'])){
    echo '<script>';
    echo 'alert("'.$_GET['error'].'");';
    echo '</script>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cssconfirm.css">
    <title>Confirmação de Email</title>
</head>
<body>
    <div class="main">
        <h1>CADASTRO</h1>
        <h2>CONFIRMAÇÃO DE EMAIL</h2>
        <form action="php/confirmacao.php" method="POST" required>
            <div class="inputBox">
                <input class="inputUser" type="text" name="code" minlength="6" maxlength="6" id="code" autocomplete="off" required>
                    <label class="input" for="code">DIGITE O CÓDIGO</label>
                <label for="submit" id="setasubmit"></label>
                <!-- <label for="submit" id="setasubmit"><img src="img/seta-direita.png"></label> -->
            </div>
            <input type="submit" name="submit" id="submit" value="enviar">
        </form>
    </div>
</body>
</html>