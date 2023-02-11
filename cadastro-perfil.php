<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/csscadastro2.css">
    <title>Cadastro Perfil</title>
</head>
<body>

    <div class="caixa">
        <h1 id="titulo">SEU PERFIL</h1>
        <form action="php/profile-cadastro.php" method="POST" enctype="multipart/form-data">
          <div>
            <input  type="file" name="image">
            <label class="input" for="image">DEFINA SUA IMAGEM DE PERFIL</label>
          </div>
          <div>
            <input type="text" name="username" required>
            <label class="input" for="username">USERNAME</label>
          </div>
        <input type="submit" name="submit" id="submit" value="DEFINIR">
        </form>
        <a class="link" href="#">Pular</a>
    </div>
        
</body>
</html>