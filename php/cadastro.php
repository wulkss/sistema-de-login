<?php

session_start();

if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cripsen = md5($senha);
$telefone = $_POST['tel'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];
$code = str_pad(rand(1, 999999), 4, 0, STR_PAD_LEFT);
$cripcode = md5($code);
$parteEmail = substr($email, 0, strpos( $email, '@' ));

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = $conexao->query($sql);

if(mysqli_num_rows($resultado) < 1)
{
    $result = mysqli_query($conexao,"INSERT INTO usuarios(stats,code,nome,email,senha,telefone,sexo,data_nascimento,username,imgperfil) VALUES (0,'$cripcode','$nome','$email','$cripsen','$telefone','$sexo','$data_nascimento','$parteEmail','PROFILE-defalt.png')");

    $_SESSION["emailconfirm"] = $email;
    $_SESSION["code"] = $code;
    
    header('Location: ../confirmacao.php');
    
}
else{

    $em = "Esse email já foi cadastrado!";
	header("Location: ../cadastro.php?error=$em");

}    

}
?>