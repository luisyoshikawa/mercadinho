	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap.map">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include 'cabec.php';
include 'conecta.php';

$consulta = "SELECT * FROM nota_fiscal";
?> 
<?php
foreach ($conectanto -> query($consulta) as $linhaAtual) {
	?> <div class="card border-dark mb-3 container" class="container" style="width: 18rem;  margin-top: 20px; padding-top: 20px;" id="centro"> <?php
	echo "Nota Fiscal:".$linhaAtual['nf']."<br>";
	echo "Data:".$linhaAtual['data']."<br>"."<br>";

	$nota = $linhaAtual['nf'];

	$consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";

	foreach ($conectanto -> query($consulta2) as $linhaAtual2) {
		/*echo "Código produto:".$linhaAtual2['cod_produto']."<br>";*/
		$codigo =$linhaAtual2['cod_produto'];
		$consulta3 = "SELECT * FROM produtos WHERE id='$codigo'";

		foreach ($conectanto -> query($consulta3) as $linhaAtual3) {
			echo "Produto: ".$linhaAtual3['nome']."<br>";
			echo "Valor unitário: R$ ".$linhaAtual3['preco']."<br>";
		}

		echo "Quantidade: ".$linhaAtual2['qtde']."<br>";
		echo "Sub total: R$ ".$linhaAtual2['subtotal']."<br>"."<br>";
	}
	echo "Valor total: R$ ".$linhaAtual['valor_total']."<br>"."<br>";
	?></div><?php
}

echo "<br>";

?>
<p><a href="index.php" class="btn btn-light">Voltar</a></p>