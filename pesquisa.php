<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "alunos";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_alunos = "SELECT * FROM bd_nomes WHERE matricula LIKE '%$pesquisar%' LIMIT 5";
    $resultado_alunos = mysqli_query($conn, $result_alunos);
    
    while($rows_alunos = mysqli_fetch_array($resultado_alunos)){
        echo "Nome do aluno: ".$rows_alunos['nome']."<br>";
    }
?>

