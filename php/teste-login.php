<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = md5('$senha') and stats = 1";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            $em = "Eita! Seu email ou sua senha está errada.";
            header("Location: ../login.php?error=$em");
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../sistema.php');
        }
    }
    else
    {
        // Não acessa
        $em = "Alguns campos não foram preenchidos!";
	    header("Location: ../login.php?error=$em");
    }
?>