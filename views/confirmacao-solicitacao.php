<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Serviço Fácil | Solicitação Confirmada</title>
    <link rel="stylesheet" href="../assets/index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body class="bg-white">

    <?php
    include("../includes/header.html");

    $numeroSolicitacao = 93821893;
    $prestadorServico = "email@prestador.com";
    $mensagem = "";

    $prestadorDisponivel = true;

    if ($prestadorDisponivel) {
        $mensagem = "Prestador: $prestadorServico";
    } else {
        $mensagem = "Infelizmente não temos nenhum prestador disponível no momento. Tente mais tarde.";
    }
    ?>

    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Solicitação Confirmada</h1>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="numeroSolicitacao" class="form-label fw-bold">Número da Solicitação:</label>
                            <input type="text" class="form-control" id="numeroSolicitacao" name="numeroSolicitacao"
                                value="<?= $numeroSolicitacao ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="prestadorServico" class="form-label fw-bold">Prestador:</label>
                            <input type="text" class="form-control" id="prestadorServico" name="prestadorServico"
                                value="<?= $mensagem ?>" readonly>
                        </div>
                    </div>
                    <a href="listagem-solicitacoes.php" class="col-md-12 btn btn-success btn-block mt-3">Lista de Solicitações</a>
                </div>
            </div>
        </div>
    </main>

    <?php
    include("../includes/footer.html");
    ?>

</body>

</html>
