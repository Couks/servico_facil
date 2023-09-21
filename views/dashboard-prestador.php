<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Painel do Prestador</title>
    <link rel="stylesheet" href="../assets/index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body class="bg-dark">

    <?php
    $emailPrestador = "prestador@gmail.com";
    $clienteNovoServico = "cliente@gmail.com";
    $tipoServicoNovoServico = "Eletricista";
    $servicoNovoServico = "Instalação Elétrica";
    $numeroServicoExecucao = "83217";
    $servicoExecucao = "Reparo Elétrico";
    $clienteExecucao = "cliente@gmail.com";
    $numeroSolicitacao = "98765"; // Exemplo de número de solicitação
    ?>

    <main class="bg-light p-5 rounded-5 container mt-4">
        <div class="row">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h1 class="text-left">Painel do Prestador</h1>
                </div>
                <div class=" col-md-6">
                    <div class="mb-3">
                        <label class="control-label fw-bold">E-mail do Prestador: </label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $emailPrestador ?>" readonly>
                        <p></p>
                    </div>
                    <div class="col-md-2 text-right">
                        <a href=""><button class="btn btn-danger">Sair</button></a>
                        <a href="/"><button class="btn btn-success">Home</button></a>
                    
                    
                </div>
                </div>
                
            </div>


            <hr>

            <div class="row mt-3">
                <div class="col-md-6 mb-3">
                    <div class="card p-4">
                        <h3>Novo Serviço Solicitado:</h3>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <label for="cliente" class="fw-bold">Cliente:</label>
                                <input type="text" class="form-control" id="cliente" name="cliente" value="<?= $clienteNovoServico ?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tipoServico" class="fw-bold">Tipo de Serviço:</label>
                                <input type="text" class="form-control" id="tipoServico" name="tipoServico" value="<?= $tipoServicoNovoServico ?>" readonly>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="servico" class="fw-bold">Serviço:</label>
                                <input type="text" class="form-control" id="servico" name="servico" value="<?= $servicoNovoServico ?>" readonly>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-success btn-block col-md-12" disabled>Iniciar Serviço</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card p-4">
                        <h3>Serviço em Execução:</h3>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <label for="numeroServico" class="fw-bold">Número do Serviço:</label>
                                <input type="text" class="form-control" id="numeroServico" name="numeroServico" value="<?= $numeroServicoExecucao ?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="servicoExecucao" class="fw-bold">Serviço:</label>
                                <input type="text" class="form-control" id="servicoExecucao" name="servicoExecucao" value="<?= $servicoExecucao ?>" readonly>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="clienteExecucao" class="fw-bold">Cliente:</label>
                                <input type="text" class="form-control" id="clienteExecucao" name="clienteExecucao" value="<?= $clienteExecucao ?>" readonly>
                            </div>
                            <div class="d-flex justify-content-around">
                                <button class="btn btn-warning col-md-6">Colocar Pendente</button>
                                <button class="btn btn-success col-md-6 ms-2">Concluir</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card p-4">
                        <h3>Serviços Pendentes:</h3>
                        <div class="mb-4">
                            <div class="col-md-6 mb-3">
                                <label for="numeroSolicitacao" class="form-label fw-bold">Número da Solicitação:</label>
                                <input type="text" class="form-control" id="numeroSolicitacao" name="numeroSolicitacao" value="<?= $numeroSolicitacao ?>" readonly>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Número do Serviço</th>
                                        <th>Data do Serviço</th>
                                        <th>Tipo de Serviço</th>
                                        <th>Serviço</th>
                                        <th>E-mail do Cliente</th>
                                        <th>Motivo</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>123</td>
                                        <td>2023-09-20</td>
                                        <td>Encanador</td>
                                        <td>Reparo Hidráulico</td>
                                        <td>cliente@pendente.com</td>
                                        <td>Motivo pendente</td>
                                        <td>
                                            <button class="btn btn-success">Continuar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </main>

</body>

</html>