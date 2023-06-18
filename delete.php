<?php
    require_once "conexao.php";

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];

        try{
            $stmt = $conn->prepare("DELETE FROM clientes WHERE Nome = :nome or Nome is null");
            $stmt ->bindParam(':nome', $nome);
            $stmt ->execute();
            
            $response = array('status' => 'success', 'message' => 'Cliente excluido com sucesso');
            echo json_encode($response);
        }
        catch(PDOException $e){
            $response = array('status' => 'error', 'message' => 'Erro ao excluir cliente' . $e->getMessage());
            echo json_encode($response);
        }

    }
?>