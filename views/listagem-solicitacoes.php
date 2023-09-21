<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lista de Solicitações</title>
    <link rel="stylesheet" href="../assets/index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body class="bg-white">

    <?php
    include("../includes/header.html");

    $clienteEmail = "cliente@email.com";
    $clienteCredito = 100.00;

    $solicitacoes = array(
        array("numero" => 73925, "data" => "2023-08-20", "categoria" => "Encanamento", "servico" => "Reparo de Vazamento", "status" => "Aguardando Início"),
        array("numero" => 37294, "data" => "2021-05-21", "categoria" => "Eletricista", "servico" => "Instalação Elétrica", "status" => "Concluído"),
        array("numero" => 81537, "data" => "2023-09-22", "categoria" => "Limpeza", "servico" => "Limpeza Residencial", "status" => "Pendente"),
        array("numero" => 24681, "data" => "2022-04-23", "categoria" => "Pintura", "servico" => "Pintura de Parede", "status" => "Em Execução"),
        array("numero" => 50876, "data" => "2023-10-24", "categoria" => "Jardinagem", "servico" => "Corte de Grama", "status" => "Cancelado"),
    );

    function exibirMotivoPendencia($motivo)
    {
        echo "<script>alert('Motivo da Pendência: $motivo');</script>";
    }
    ?>

    <main class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <h1>Minha Lista de Solicitações</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="solicitar-servico.php" class="btn btn-light lh-1">
                    <ion-icon name="add"></ion-icon> Criar Nova Solicitação
                </a>
                <a href="logout.php" class="btn btn-light lh-1">
                    <ion-icon name="log-out"></ion-icon> Sair
                </a>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Cliente:</strong> <?= $clienteEmail ?></p>
                </div>
                <div class="col-md-6">
                    <p><strong>Crédito:</strong> R$ <?= number_format($clienteCredito, 2) ?></p>
                </div>
            </div>
        </div>
        <nav aria-label="Navegação de página exemplo">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
            </ul>
        </nav>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Número da Solicitação</th>
                    <th scope="col">Data</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Serviço</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($solicitacoes as $solicitacao) : ?>
                    <tr>
                        <th scope="row"><?= $solicitacao['numero'] ?></th>
                        <td><?= $solicitacao['data'] ?></td>
                        <td><?= $solicitacao['categoria'] ?></td>
                        <td><?= $solicitacao['servico'] ?></td>
                        <td><?= $solicitacao['status'] ?></td>
                        <td>
                            <?php if ($solicitacao['status'] === 'Pendente') : ?>
                                <a href="#" onclick="exibirMotivoPendencia('Motivo da pendência aqui')">Ver Pendência</a>
                            <?php elseif ($solicitacao['status'] === 'Aguardando Início') : ?>
                                <a href="#">Cancelar</a>
                            <?php elseif ($solicitacao['status'] === 'Concluído') : ?>
                                <a href="#">Avaliar</a>
                            <?php elseif ($solicitacao['status'] === 'Cancelado') : ?>
                                <a href="#" onclick="exibirMotivoPendencia('Motivo do cancelamento aqui')">Ver Motivo</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </main>

    <?php
    include("../includes/footer.html");
    ?>

</body>

</html>