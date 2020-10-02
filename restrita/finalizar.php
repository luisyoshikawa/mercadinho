<?php
	include 'conecta.php';
	include '../verifica.php';
	session_start();
	$nf = $_SESSION['nf'];
	$total = $_GET['total'];
	echo "Nota Fiscak: ". $nf ."<br>";
	echo "Total:". $total ."<br>";

	$consulta = $conectanto -> prepare(
		"UPDATE nota_fiscal SET valor_total ='$total' WHERE nf = '$nf'"
	);
	$consulta -> execute();

	header('Location: logout.php');
?>