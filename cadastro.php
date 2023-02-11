<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css\csscadastro.css">
</head>
<body>
    <?php if (isset($_GET['error'])){
        echo '<script>';
		echo 'alert("'.$_GET['error'].'");';
        echo '</script>';
    }
	?>
    <div class="box"> 
        <form action="php/cadastro.php" method="POST" required>
            <h1 id="titulo">CADASTRO</h1>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label class="input" for="nome">Nome Completo</label>
            </div>
            <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" required>
                    <label class="input" for="nome">Email</label>
            </div>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label class="input" for="senha">Senha</label>
            </div>
            <div class="inputBox">
                <input type="text" name="tel" id="tel" class="inputUser" data-js="phone" required>
                    <label class="input" for="nome">Telefone</label>
            </div>
            <div class="inputDate">
                    <label class="pergunta1 for="data_nascimento" ><b> Data de Nascimento </b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="data_nascimento" required>
            </div>
            <div id="sexo">
                <p id="pergunta">Qual seu sexo?</p>
                <div id="escsex">
                    <div>
                        <input type="radio" id="Masculino" name="sexo" value="Masculino" required>
                            <label class="pergunta1" for="Masculino">Masculino</label>
                    </div>
                    <div>
                        <input type="radio" id="Feminino" name="sexo" value="Feminino" required>
                            <label class="pergunta1 for="Feminino" >Feminino</label>
                    </div>
                    <div>
                        <input type="radio" id="Outro" name="sexo" value="Outro" required>
                            <label class="pergunta1 for="Outro" >Outro</label>
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" id="submit">
        </form>
        <a class="link" href="login.php">Faça Login</a>
    </div>
<script src="js/phone.js"></script>
</body>
</html>