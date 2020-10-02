<?php include '../verifica.php';?>
<!DOCTYPE html>
<html>
<head>


	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap.map">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

	<title></title>
</head>
<body>
	<?php 
	include 'conecta.php';
	include 'cabec.php';
	echo "<hr>";
	session_start();
	$nf = $_SESSION['nf'];

	$consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";

	echo "Nota Fiscal: ". $nf ."<br>";
	$total = 0;
	foreach ($conectanto -> query($consulta) as $linhaAtual) {
		echo "Código dos produto:". $linhaAtual['cod_produto']. "<br>";
		echo "Quantidade:".$linhaAtual['qtde'] ."<br>";
		echo "Subtotal: R$ ".$linhaAtual['subtotal'] ."<br>";
		$total = $total + $linhaAtual['subtotal'];
		echo "<hr>";
	}
	echo "Total: R$ ".$total."<br>";

	?>
	<br>
	<p> O que deseja fazer ?</p>
	<a href="seleUltimaNF.php">Inserir novo produto</a><br><br>
	<a href="finalizar.php?total=<?php echo $total; ?>">Finalizar nota fiscal</a>


</body>
</html>