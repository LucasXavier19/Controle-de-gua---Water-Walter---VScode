<?php 
include 'conexao.php';

$garrafoes = $_POST['garrafoes'];
$data = $_POST['data'];


$sql = "INSERT INTO `tb_estoque`(garrafoes, data) VALUES ('$garrafoes','$data')";

mysqli_query($conexao, $sql) or die("Cadastro mal sucedido");

mysqli_close($conexao);

header('location:estoque.php');
?>
