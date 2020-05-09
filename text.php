<?php 
include 'conexao.php';
mysqli_select_db($conexao,"alunos");

$sql="SELECT nome, matricula, serie, data, FROM bd_nomes";

$consulta = mysqli_query($conexao,$sql);


if(mysqli_num_rows($consulta)==0){

	echo "<center><h1>Nenhuma registro Encontrado </h1></center>";
}
	else{


		?>
		<center>

<form name="formBusca" action="tabela.php?a=busca" method="POST">
			

	
<div id="divBusca">
  <img src="img/lupa.png" alt="Buscar..." height="30px" />
  <input type="text" name="nome" id="txtBusca" placeholder="Digite para localizar..."/>
  <input type="submit"  id="btnBusca" value="Pesquisar"/>
</div>
			
			</form>
	<?php
		include "conexao.php";
		mysqli_select_db($conexao, "nomes") or die ("Erro na seleção do Banco");
		if(isset($_GET['a'])){
			$palavra = trim($_POST['nome']);
			$sql= "SELECT * FROM tb_pessoa WHERE nome LIKE '%".$palavra."%' ORDER BY id";
			$query = mysqli_query($conexao, $sql) or die ("Erro na consulta SQL");
			$numRegistros = (mysqli_num_rows($query));
			if ($numRegistros !=0){
				echo $numRegistros."registro(s) encontrado(s)<hr><br>";
				while ($busca = mysqli_fetch_array($query)){
					echo $busca['nome']."".$busca['serie']."<br>";
				}
			}
			else {
				echo "Nenhum Registro Encontrado <hr>";
			}
		}
	

	?>
	</center>
	<table border="1" class="container">
		<tr>
		
			<td>Nome</td>
			<td>Matricula</td>
			<td>Serie</td>
      <td>Data</td>
			<td colspan="2"><center>Opções</center></td>
		</tr>
			
 <?php
		  	while($resultado = mysqli_fetch_array($consulta)){	  
?>
	<tr>
		<td><?php echo $resultado['nome'];?></td>
		<td><?php echo $resultado['matricula'];?></td>
		<td><?php echo $resultado['serie'];?></td>
		<td><?php echo $resultado['idade'];?></td>
		<td> <a href=alteracadastro.php?id=<?php echo $resultado['id'];?> >
				<center><input style="color:blue" id="contact-submit" type="button" name="alterar" value="Alterar"></center>
			</a>
		</td>
		<td>
			<a href="#">
				<center><input style="color:red" id="contact-submit" type="button" name="excluir" value="Excluir"></center>
			</a>
		</td>
	</tr>
<?php
	}
}
?>
</table>
</body>
</html>