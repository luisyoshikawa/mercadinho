<?php 
include 'conecta.php';
session_start();
$nf = $_SESSION['nf'];
$idProduto = $_POST['idProduto'];
$qtde = $_POST['qtdeProduto'];
$subTotal = $_POST['sub'];


echo "Nota Fiscal -=-=-". $nf ."<br>";
echo "Id do produto -=-=-". $idProduto ."<br>";
echo "Quantidade -=-=-". $qtde ."<br>";
echo "Subtotal -=-=-". $subTotal ."<br>";


$consulta = $conectanto->prepare(
	"INSERT INTO itens_nf (cod_produto, num_nf, qtde, subtotal)
	VALUES ('$idProduto', '$nf', '$qtde', '$subTotal')");
$consulta -> execute();
header('Location: confirmaItem.php');



?>
