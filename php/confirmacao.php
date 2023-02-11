<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['code']))
    {
        // Acessa
        include_once('config.php');
        $codigo = $_POST['code'];
        $email = $_SESSION["emailconfirm"];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and code = md5('$codigo') and stats = 0";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            $em = "Código errado!";
	        header("Location: ../confirmacao.php?error=$em");
        }
        else
        {
            $edit = "UPDATE usuarios SET stats = 1, code = '' WHERE email = '$email'";
            if ($conexao->query($edit) === TRUE) {
                header('Location: ../cadastro-perfil.php');
              } else {
                $em = "Deu algum erro no servidor, tente novamente mais tarde!";
                header("Location: ../confirmacao.php?error=$em");
              }
        }
    }
    else
    {
        // Não acessa
        $em = "Faça o envio do código!";
	    header("Location: ../confirmacao.php?error=$em");

    }

?>
