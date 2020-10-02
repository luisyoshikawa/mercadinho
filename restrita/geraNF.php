<?php 
	include 'conecta.php';
	include '../verifica.php';
	$dataAtual = $_POST['data'];
	$consulta = $conectanto -> prepare("INSERT INTO nota_fiscal (data) VALUES ('$dataAtual')");
	$consulta -> execute();
	header('Location: seleUltimaNF.php');
?>