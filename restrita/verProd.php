<?php

include 'conecta.php';
include 'cabec.php';
$consulta = "SELECT * FROM produtos";
foreach($conex -> query($consulta) as $linha){
?>
<table class="table table-striped">
	<thead>
		<tr scope="row">
    		<td scope="col"><?php echo $linha['nome']; ?></td>
			  <td scope="col">R$<?php echo $linha['preco']; ?></td>
		</tr>
  </table>
<?php } ?>
  <a href="index.php">Voltar Início</a>
  