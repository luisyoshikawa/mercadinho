<!DOCTYPE html>
<html>
<head>
	<title>Index</title>

	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>
	<?php include 'cabec.php'?>

<table class="table container" style="border-bottom: 2px solid #dee2e6;">
	<thead>
    	<tr scope="row">
      		<th>Produtos</th>
      		<th>Preços</th>
    	</tr>
  	</thead>
<?php

include 'conecta.php';
$consulta = "SELECT * FROM produtos";
foreach($conectanto -> query($consulta) as $linha){
?>
		<thead>
			<tr scope="row">
    			<td><?php echo $linha['nome']; ?></td>
				<td>R$<?php echo $linha['preco']; ?></td>
			</tr>
		</thead>	
<?php } ?>
</table>
</div>
</body>
</html>