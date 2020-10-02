<!DOCTYPE html>
<html>
<head>
	<title>Item da nota fiscal</title>
	
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap.map">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
</head>
<body>
	<?php 
		include 'conecta.php';
		include 'cabec.php';
		echo "<br>";
		session_start();
		$nf = $_SESSION['nf'];?>
		<div class="container"><?php
		echo "<b>Numero da nota fiscal: ". $nf . "</b> <br>"; 
		$idProduto = $_POST['produtoOpcao'];
		$qtdeProduto = $_POST['qtde'];

		$consulta = "SELECT preco,nome FROM produtos WHERE id='$idProduto'";
		$consulta = $conectanto->query($consulta);
		$linhaAtual = $consulta->fetch_assoc();

		$preco = $linhaAtual['preco'];
		$nome = $linhaAtual['nome'];

		$sub = $preco * $qtdeProduto;

	?>
	<form action="insereItemNF.php" method="POST">
		<p>Id do produto:
			<input type="text" name="idProduto" value="<?php echo $idProduto; ?>" readonly=“true”>
		</p>
		<p>Produto:
			<input type="text" name="nomeProduto" value="<?php echo $nome; ?>" readonly=“true”>
		</p>
		<p>Valor unitário:
			<input type="text" name="uniValorProduto" value="<?php echo $preco; ?>" readonly=“true”>
		</p>
		<p>Quantidade:
			<input type="text" name="qtdeProduto" value="<?php echo $qtdeProduto; ?>" reandonly="reandonly">
		</p>
		<p>Subtotal:
			<input type="text" name="sub" value="<?php echo $sub; ?>" readonly=“true”>
		</p>
		<input type="submit" name="Adicionar produto">

	</form>
</div>
</body>
</html>