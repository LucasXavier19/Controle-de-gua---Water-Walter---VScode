<!DOCTYPE html>
<html>
<title>Consultar Estoque</title>
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
    <h2>Atualizar Estoque</h2>
  </div>
  <form class="w3-container" action="dadosGarrafao.php" method="POST">
    <p>      
    <label class="w3-text-green"><b>Adicionar Garrafões</b></label>
    <input class="w3-input w3-border w3-sand" name="garrafoes" type="text"></p>
    <p>      
    <label class="w3-text-green"><b>Data</b></label>
    <input class="w3-input w3-border w3-sand" name="data" type="date"></p>

    <label for="country" class="w3-text-green"><b>Adicionar Garrafão</b></label>
          <select id="country" name="turma" class="w3-input w3-border w3-sand">
            <option value="1°">1 Garrafão</option>
            <option value="2°">1 Garrafão</option>
            <option value="3°">1 Garrafão</option>
            <option value="3°">1 Garrafão</option>
            <option value="3°">1 Garrafão</option>
            <option value="3°">1 Garrafão</option>
            <option value="3°">1 Garrafão</option>
            <option value="3°">1 Garrafão</option>
            <option value="3°">1 Garrafão</option>
            <option value="3°">1 Garrafão</option>
            <option value="3°">1 Garrafão</option>
            <option value="3°">1 Garrafão</option>
          </select>
    
    <p>
    <input class="w3-btn w3-green" type="submit" name="excluir" value="Confirmar">

    
  </form>
</div>
<center><a href="index.php" class="button">Voltar</a></center>

</body>
</html> 
