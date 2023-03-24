<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="arroz.css">
        <title>Atividade de Cadastro</title>
    </head>
    <body>
        <div class="container">
        <?php
            include("recortes/menu.php");
        ?>
    <h1>Cadastro de usuário</h1>
    <form action="apresentar.php" method="GET">
        <div class="mb-3">
            <label class="form-label">Digite seu nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>
        <div class="mb-3">
            <label class="form-label">Data de Nascimento</label>
            <input type="text" class="form-control" name="data" placeholder="Data de Nascimento">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite o seu país</label>
            <input type="text" class="form-control" name="pais" placeholder="País">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite o seu estado</label>
            <input type="text" class="form-control" name="estado" placeholder="Estado">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite a sua cidade</label>
            <input type="text" class="form-control" name="cidade" placeholder="Cidade">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite o seu e-mail</label>
            <input type="email" class="form-control" name="email" placeholder="usuario@gmail.com">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite a sua senha</label>
            <input type="text" class="form-control" name="senha" placeholder="######">
        </div>
        <input type="submit" class="btn btn-success" value="Entrar">
        <input type="reset" class="btn btn-danger" value="Cancelar">
    </form>
        </div>
    </body>
</html>