<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>crud em php</title>
    <script src="https://kit.fontawesome.com/7576946143.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js""></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container register mt-5">
        <div class="col-6 pt-5 modal-1 ">
            <h2 class="main-title">Cadastro de email</h2>
            
            <form  class="form-clientes" action="insert.php" method="post">
                <!-- <label for="name">Nome:</label> -->
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required="true">
                
                <!-- <label for="e-mail">Email:</label> -->
                <input type="text" name="email" id="email" placeholder="Digite seu email" required="true">
                <button type="submit" id="enviar"><i class="fa-solid fa-right-to-bracket"></i></button>
            </form>
        </div>
        
        <div class=" col-5 pt-5 modal-2">
            <h3 class="title-clients">Clientes cadastrados</h3>
            <div id="clientes-cadastrados"></div>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/script.js""></script>
</body>
</html>