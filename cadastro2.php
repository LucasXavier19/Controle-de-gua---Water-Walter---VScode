<html>
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

<center><h3>Fazer Pedido</h3></center>


<div class="container">
  <form action="dados." method="post">
    <label for="fname">Nome Completo</label>
    <input type="text" id="fname" name="nome" placeholder="Nome completo do aluno">

          <label for="lname">Quantidade</label>
          <input type="text" id="lname" name="quantidade" placeholder="quantidade">

          <label for="country">Serie</label>
          <select id="country" name="turma">
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

    <label for="lname">Data</label>
    <input type="text" id="lname" name="data" placeholder="data">
  
    <input type="submit" value="Efetuar Pedido">
 
  </form>
</div>
<center><a href="index.php" class="button">Voltar</a></center>

</body>
</html>
