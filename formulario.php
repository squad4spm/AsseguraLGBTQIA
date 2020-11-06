<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "asseguralgbtqi";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die("A conexão com o banco de dados falhou: ".mysqli_connect_error());
    }

    if (isset($_POST['nome']) && isset($_POST['sobreNome']) && isset($_POST['email']) && isset($_POST['senha']) 
     && isset($_POST['endereco']) && isset($_POST['complemento']) && isset($_POST['cidade']) && isset($_POST['estado']) 
     && isset($_POST['cep'])){
        $nome = $_POST['nome'];
        $sobreNome = $_POST['sobreNome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $endereco = $_POST['endereco'];
        $complemento = $_POST['complemento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];

        $sql = "insert into voluntarios (nome, sobreNome, email, senha, endereco, complemento, cidade, estado, cep) 
            values('$nome','$sobreNome','$email','$senha','$endereco','$complemento','$cidade','$estado','$cep')";
        $result = $conn->query($sql);
    }
?>