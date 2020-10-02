<?php

include 'conecta.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = $conectanto -> prepare ("INSERT INTO `produtos`( `nome`, `preco`) VALUES ('$nome', '$preco')");

$sql -> execute();

header('Location: index.php');
?>