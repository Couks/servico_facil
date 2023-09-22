<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Serviço Fácil | Confirmação de Preço do Serviço</title>
    <link rel="stylesheet" href="../assets/index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body class="bg-white">

    <?php

    include("../includes/header.html");

    $tipoServico = "Eletricista";
    $servico = "Instalação Elétrica";
    $precoServico = 200.00;
    $creditoCliente = 10.00;
    $valorACobrar = $precoServico - $creditoCliente;
    ?>

    <main class="container mt-5 p-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Confirme o Preço do Serviço</h1>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="tipoServico" class="form-label fw-bold">Tipo de Serviço:</label>
                            <input type="text" class="form-control" id="tipoServico" name="tipoServico" value="<?= $tipoServico ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="servico" class="form-label fw-bold">Serviço:</label>
                            <input type="text" class="form-control" id="servico" name="servico" value="<?= $servico ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="precoServico" class="form-label fw-bold">Preço:</label>
                            <input type="text" class="form-control" id="precoServico" name="precoServico" value="<?= $precoServico ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="creditoCliente" class="form-label fw-bold">Seu crédito:</label>
                            <input type="text" class="form-control" id="creditoCliente" name="creditoCliente" value="<?= $creditoCliente ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="valorACobrar" class="form-label fw-bold">Valor a ser cobrado:</label>
                            <input type="text" class="form-control" id="valorACobrar" name="valorACobrar" value="<?= $valorACobrar ?>" readonly>
                        </div>
                    </div>
                    <button type="submit" class="col-md-12 btn btn-success">Confirmar</button>

                </div>
            </div>
        </div>
    </main>

    <?php
    include("../includes/footer.html");
    ?>

</body>

</html>