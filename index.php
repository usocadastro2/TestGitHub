<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <!-- CSS do Bootstrap --> 
        <link rel="stylesheet" href="estilo/bootstrap.min.css">
        <!-- CDN do jQuery 3.7.1 -->
            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha384-..." crossorigin="anonymous"></script>

        
    </head>

    <body>
     <div class="d-flex justify-content-center align-items-center vh-100">
        <?php
            $nome = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) :'Intruso/visitante';

        
        ?>
        <div class="text-center">
            <h1 class="text-secondary text"> Seja bem Vindo, <?php echo $nome; ?>!</h1>
            <button type="button" class="btn btn-primary me-3" data-toggle="tooltip" data-bs-placement="bottom" title="Clique aqui para mais informações!">Clique aqui</button>

            <button type="button" class="btn btn-secondary me-3" data-toggle="tooltip" data-placement="right" title="Dica no topo">
            Tooltip on top</button>

                <!-- Botão com Tooltip "left" -->
    <button type="button" class="btn btn-secondary"     data-toggle="tooltip" data-bs-placement="right"  title="Tooltip à esquerda!">
        Dica a Direita
    </button>
        </div>
    </div>
       <!-- Javascript do Bootstrap --> 
        <script src="estilo/bootstrap.bundle.min.js"></script>
          <script>$(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })</script>
    </body>
</html>