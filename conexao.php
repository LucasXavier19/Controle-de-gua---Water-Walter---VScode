<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_garrafao";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
	if($conexao){
		echo "";
	}else{
		echo "conexao falhou";
	}
?>