<?php
$id = $_GET['id'];
include 'conexao.php';
mysqli_select_db($conexao,"bd_garrafao");
$sqlApagar = "DELETE FROM tb_estoque WHERE id ='$id'";
mysqli_query($conexao, $sqlApagar)or die("Erro na exclusão do registro");
echo "<script>
	alert('Pedido Realizado!');
	window.location.href='index.php?a=busca'
	</script>";



?>