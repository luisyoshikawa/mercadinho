<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap.map">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
<?php include 'cabec.php'?>
	<div class="card border-dark mb-3 container" style="width: 18rem;">
		<div class="card-body">
   			<form action="cadastrarProd.php" method="POST">

    			Nome item:<input name="nome"></input><br>
    			Preco item:<input name="preco"></input><br>

				<input type="submit" name="Adicionar produto">
			</form>
		</div>	
	</div>
</body>
</html>