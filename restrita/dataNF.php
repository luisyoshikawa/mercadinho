<?php 
include 'conecta.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data da nota fiscal</title>
	
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap.map">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
</head>

<body>
	<?php include 'cabec.php'?>
	<div class="card border-dark mb-3 container" style="width: 18rem;">
		<div class="card-body">
			<form action="geraNF.php" method="post">
				<p>Insira a data da venda</p>
				<p> Data:<input type="date" name="data"></p>
				<input type="submit" name="Continuar">
			</form>
		</div>
	</div>
</body>
</html>