<?php 
include 'conexao.php';

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$turma = $_POST['turma'];
$data = $_POST['data'];


$sql = "INSERT INTO `tb_registros`(nome, quantidade, turma, data) VALUES ('$nome','$quantidade','$turma','$data')";

mysqli_query($conexao, $sql) or die("Cadastro mal sucedido");

mysqli_close($conexao);

header('location:index.php');
?>
