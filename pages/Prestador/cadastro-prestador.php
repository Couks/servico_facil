<?php
require("routes.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Serviço Fácil | Cadastro do Prestador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body class="bg-white">
    <?php include("../../components/header.html"); ?>

    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h1 class="mb-2">Cadastro do Prestador</h1>
                    </div>
                    <div class="card-body">
                        <form action="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="pass" placeholder="Digite sua senha de acesso">
                            </div>
                            <div class="mb-3">
                                <label for="pass-confirmation" class="form-label">Digite sua senha novamente</label>
                                <input type="password" class="form-control" id="pass-confirmation" placeholder="Digite novamente sua senha">
                            </div>

                            <button type="submit" class="btn btn-success btn-block">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("../../components/footer.html")
    ?>

</body>

</html>