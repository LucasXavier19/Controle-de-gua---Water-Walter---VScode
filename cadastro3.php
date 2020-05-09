<!DOCTYPE html>
<html>
<title>Fazer Pedido</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<style>
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

<div class="w3-card-4">
  <div class="w3-container w3-green">
    <h2>Fazer Pedido</h2>
  </div>
 
  <form class="w3-container" action="dados.php" method="post">
    <p>      
    <label class="w3-text-green"><b>Nome</b></label>
    <input class="w3-input w3-border w3-sand" name="nome" type="text"></p>
    <p>      
    <label class="w3-text-green"><b>Quantidade</b></label>
    <input class="w3-input w3-border w3-sand" name="quantidade" type="text"></p>

    <label class="w3-text-green"><b>Data</b></label>
    <input class="w3-input w3-border w3-sand" name="data" type="date"></p>

    
    <label for="country" class="w3-text-green"><b>Serie</b></label>
          <select id="country" name="turma"class="w3-input w3-border w3-sand">
            <option value="1°">1°A</option>
            <option value="2°">1°B</option>
            <option value="3°">1°C</option>
            <option value="3°">1°D</option>
            <option value="3°">2°A</option>
            <option value="3°">2°B</option>
            <option value="3°">2°C</option>
            <option value="3°">2°D</option>
            <option value="3°">3°A</option>
            <option value="3°">3°B</option>
            <option value="3°">3°C</option>
            <option value="3°">3°D</option>
          </select>
    
    <p>
    <a class= href=confirPedido.php?id=<?php echo $busca['id'];?> 
			<input class="w3-btn w3-green" id="contact-submit" type="button" name="excluir" value="Excluir">
    
    <button class="w3-btn w3-green">Efetuar Pedido</button></p>

    <td>
		
			</a>
		</td>

    
  </form>
</div>
<center><a href="index.php" class="button">Voltar</a></center>

</body>
</html> 
