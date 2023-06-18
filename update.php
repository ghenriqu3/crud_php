<?php
  
    require_once "conexao.php";
    try{
        //consulta para listar todos os clientes
        $sql = "SELECT * from clientes";
        $stmt = $conn->prepare($sql);
        $stmt->execute();


        //ler os resultados
        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        

        if(empty($clientes)){
            $response = array("message" => "Nenhum cliente foi encontrado");
        }else{
            $response = array("message" => "Clientes encontrados", "data" => $clientes);
        }
        //retornando em JSON

        header('Content-type: application/json');
        echo json_encode($response);


    }catch(PDOException $e){
        $response = array("message" => "Erro ao listar clientes:" . $e->getMessage());
        echo json_encode($response);
        exit();
    }  
?>