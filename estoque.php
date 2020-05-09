<?php 
include 'conexao.php';

$sql ="SELECT * FROM `tb_estoque` WHERE 1";

$consulta = mysqli_query($conexao, $sql);


?>
<center><h2 id="customers">Estoque Garrafões</h2>
</center>
	<table id="customers">
		<tr>
			<td>Quantidade</td>
			<td>Data</td>
		</tr>
	
	<?php 
		while ($resultado = mysqli_fetch_array($consulta)) {
		
	?>
	
		<tr>
			<td><center><?php echo $resultado['garrafoes']?></center></td>
			<td><center><?php echo $resultado['data']?></center></td>
			
		</tr>
	<?php }?>
	</table>
	<div class="container">
	<form action="pesquisa.php" method="POST">
    <label for="lname">Pesquisar Aluno</label>
    <input type="text" id="lname" name="pesquisar" placeholder="Pesquisar Aluno">
	<input type="submit" value="Pesquisar">
	</form>
	</div>

			
	<style>
		body {
  font-family: Arial;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

  }

  .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
}
</style>
<body>
	</style>






		<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #4CAF50;

  
}
</style>



<center> 
<a href="atualizaEstoque.php" class="button">Atualizar Estoque</a>
<a href="index.php" class="button">Voltar</a>

</center>

</body>
</html>