<?php 

session_start();

$email = $_SESSION["emailconfirm"];
$username = $_POST['username'];

if (isset($_POST['submit']) && isset($_FILES['image'])) {
	include "config.php";

	echo "<pre>";
	print_r($_FILES['image']);
	echo "</pre>";

	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];

	if ($error === 0) {
		if ($img_size > 12500000) {
			$em = "Desculpe, o seu arquivo é muito grande.";
			header("Location: ../cadastro-perfil.php?error=$em");
		    // header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
            // echo($img_ex);
            // echo($img_ex_lc);
			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("PROFILE-", true).'.'.$img_ex_lc;
				$img_upload_path = '../img/upload/profile/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

                
				// Insert into Database
				$sql = "UPDATE usuarios SET imgperfil = '$new_img_name', username = '$username' WHERE email = '$email'";
				mysqli_query($conexao, $sql);
			}else {
				$em = "Você não pode fazer upload de arquivos desse tipo!";
		        header("Location: ../cadastro-perfil.php?error=$em");
			}
		}
	}else {
		$em = "Ocorreu um erro desconhecido!";
		header("Location: index.php?error=$em");
	}

}else {
	echo("eita");
}