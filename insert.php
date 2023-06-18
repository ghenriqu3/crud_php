<?php
    header('Content-type: application/json');
    require_once "conexao.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
    }

    try{
      
        $stmt = $conn->prepare("INSERT INTO clientes (nome, email) VALUES(:nome, :email)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();


    }catch(PDOException $e){
        echo "Erro ao cadastrar cliente" .  $e->getMessage();
    }
