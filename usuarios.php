<?php

$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$sql = 'CREATE DATABASE cadastrosite';
if (mysqli_query($link, $sql)) {
    echo "Database cadastrosite created successfully\n";
} else {
    echo 'Error creating database: ' . mysql_error() . "\n";
}

$conn = new mysqli('localhost','root','','cadastrosite');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'CREATE TABLE `usuarios` (`id` tinyint(3) NOT NULL AUTO_INCREMENT,`stats` tinyint(3) NOT NULL,`code` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,`senha` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,`email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,`nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,`telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,`sexo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,`data_nascimento` date NOT NULL,`username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,`imgperfil` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL, PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci';

if ($conn->query($sql) === TRUE) {
  echo "Table usuarios created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

?>