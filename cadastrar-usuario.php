<?php
	include 'conecta.php';

	$Nome = $_POST['nomecriar'];
	$Email = $_POST['emailcriar'];
	$Senha = $_POST['senhacriar'];

	$consulta = $conexao -> prepare("INSERT INTO usuario(nome,email,senha) VALUES ('$Nome','$Email','$Senha')");
	$consulta -> execute();

	header('Location: index.html');
?>