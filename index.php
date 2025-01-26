<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="estilo/estilo.css">
    </head>
    <body>
        <?php
            $nome = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) :'Intruso';

        
        ?>
        <h1> Seja bem Vindo, <?php echo $nome; ?>!</h1>
        
    </body>
</html>