<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
<?php if (isset($_GET['error'])){
        echo '<script>';
		echo 'alert("'.$_GET['error'].'");';
        echo '</script>';
    }
?>
    <div class="caixa">
        <h1 id="titulo">LOG IN</h1>
        <form action="php/teste-login.php" method="POST">
          <div class="inputBox">
            <input  type="email" name="email" class="inputUser" required autofocus>
            <label class="input" for="email">EMAIL</label>
          </div>
          <div class="inputBox">
            <input type="password" name="senha" class="inputUser" required>
            <label class="input" for="senha">SENHA</label>
          </div>
        <input type="submit" name="submit" id="submit" value="entrar">
        </form>
        <a class="link" href="#">Esqueceu sua senha?</a>
        <a class="link" id="link2" href="cadastro.php">Faça seu cadastro!</a>
    </div>
        
</body>
</html>