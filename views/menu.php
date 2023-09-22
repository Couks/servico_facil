<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu do Projeto</title>
    <link rel="stylesheet" href="../assets/index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>

    <?php
    include("../includes/header.html");
    ?>

    <main>
        <div class="container">
            <h1 class="mt-4 mb-4">Menu do Projeto</h1>
            <hr>

            <div class="row gap-5 mt-5">
                <div class="col-md-3">
                    <a href="../views/cadastro-cliente.php">
                        <button class="btn btn-primary btn-block">Cadastro Cliente</button>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="../views/cadastro-prestador.php">
                        <button class="btn btn-primary btn-block">Cadastro Prestador</button>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="../views/confirmacao-cadastro.php">
                        <button class="btn btn-primary btn-block">Confirmação Cadastro</button>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="../views/confirmacao-preco.php">
                        <button class="btn btn-primary btn-block">Confirmação Preço</button>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="../views/confirmacao-solicitacao.php">
                        <button class="btn btn-primary btn-block">Confirmação Solicitação</button>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="../views/dashboard-prestador.php">
                        <button class="btn btn-primary btn-block">Dashboard Prestador</button>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="../views/listagem-solicitacoes.php">
                        <button class="btn btn-primary btn-block">Listagem Solicitações</button>
                    </a>
                </div>
            </div>
        </div>


    </main>

    <?php
    include("../includes/footer.html");
    ?>

</body>

</html>