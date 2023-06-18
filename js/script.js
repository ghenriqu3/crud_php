$(document).ready(function(){
    $("#enviar").click(function(e){
        e.preventDefault();
        var nome = $("#nome").val();
        var email = $("#email").val();
        
        //requisição ajax
        $.ajax({
            url: 'insert.php',
            method: 'POST',
            dataType: 'json',
            data: {nome: nome, email: email},
            success: function(response){
                // Limpar campos do formulário
                $("#nome").val("");
                $("#email").val("");
                // Chamar função para listar clientes abaixo do formulário
                var novoCLienteHTML = "<li>" + response.Nome + '---' + response.email + "</li>";
                $("#clientes-cadastrados ul").append(novoCLienteHTML);
                console.log("cliente cadastrado com sucesso");
                // atualizarListaClientes();
            },
            error: function(xhr, status, error){
                console.log("Erro na requisição: " + error);
            }
        });
    });

    function excluirCliente(clienteId){
        $.ajax({
            url: 'delete.php',
            method: 'POST',
            dataType: 'json',
            data: { nome: clienteId }, // Envie o ID como parâmetro "nome"
            success: function(response){
                console.log(response.message);
                atualizarListaClientes();
            },
            error: function(xhr, status, error){
                console.log("erro na requisição" + error);
            }
        });
    }
    
    $(document).on('click', '.btn-excluir', function(){
        var clienteId = $(this).data('id'); // Use o atributo "data-id" para obter o ID
        excluirCliente(clienteId);
    });

    function atualizarListaClientes(){
        $.ajax({
            url:'update.php',
            method: 'GET',
            dataType: 'json',
            success: function(response){
                if(response.message ===  "Nenhum cliente foi encontrado"){
                    $('#clientes-cadastrados').html(response.message);
                }else{
                    var clientesHTML = "<ul>";
                    $.each(response.data, function(index, cliente){
                        clientesHTML += "<li>" + cliente.Nome + " - " + cliente.email + "<button class='btn-excluir' data-id='" + cliente.Nome + "'><i class='far fa-trash-alt'></i></button></li>"; 
                    });
                    clientesHTML += "</ul>";
                    $("#clientes-cadastrados").html(clientesHTML);
                }
            },
            error: function(xhr, status, error){
                console.log("Erro na requisição" + error);
            }
        });
    }


    atualizarListaClientes();
});