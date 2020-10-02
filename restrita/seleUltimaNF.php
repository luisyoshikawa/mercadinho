<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php 
include 'conecta.php';
include 'cabec.php';

$consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
$consulta = $conectanto->query($consulta);
$linhaAtual = $consulta->fetch_assoc();
$ultimoRegis = $linhaAtual['ultima'];

session_start();
$_SESSION['nf'] = $ultimoRegis;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ultima nota</title>
</head>
<body>
	<div  class="container">
	<form action="insereItem.php?nf='<?php echo $ultimoRegis; ?>'" method="post">
		<p>Nota fiscal: <input type="text" name="nf" readonly=“true” value="<?php echo $ultimoRegis; ?> "</p>
		<p>
			Produto: 
			<select name="produtoOpcao" id="produtoOpcao" >
				<?php 
					$consulta = "SELECT * FROM produtos";
					foreach ($conectanto -> query($consulta) as $linhaAtual) {
					?>
					<option
					value="<?php echo $linhaAtual['id']; ?>">
					<?php echo $linhaAtual['nome'];?>
					</option>
					<?php
					}
					?>
			</select>
		</p>
		<p>
			Qtde: <input type="text" name="qtde">
		</p>
		<input type="submit" name="adicionar">
	</form>
				</div>

</body>
</html>