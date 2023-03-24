<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="arroz.css">
        <title>Dados</title>
    </head>
    <body>
        <div class="container">
        <?php
            include("recortes/menu.php");
        ?>
        <h1>Dados obtidos</h1>
        <p>O seu nome é: <?php echo $_GET["nome"] ?> </p>
        <p>Você nasceu no dia: <?php echo $_GET["data"] ?> </p>
        <p>O seu país é: <?php echo $_GET["pais"] ?> </p>
        <p>O seu estado é: <?php echo $_GET["estado"] ?> </p>
        <p>A cidade onde você mora é: <?php echo $_GET["cidade"] ?> </p>
        <p>O seu e-mail é: <?php echo $_GET["email"] ?> </p>
        <p>A sua senha é: <?php echo $_GET["senha"] ?> </p>
        <a href="case.php">Voltar</a>
        </div>
    </body>
</html>