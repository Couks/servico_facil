<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Avalie seu Prestador</title>
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
    $dataAbertura = "2023-08-15";
    $dataConclusao = "2023-08-18";
    $emailPrestador = "prestador@email.com";
    ?>

    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Avalie seu Prestador</h1>
                <hr>
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 ">
                            <label for="tipoServico" class="form-label fw-bold">Tipo de Serviço:</label>
                            <input type="text" class="form-control" id="tipoServico" name="tipoServico" value="<?= $tipoServico ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="servico" class="form-label fw-bold">Serviço:</label>
                            <input type="text" class="form-control" id="servico" name="servico" value="<?= $servico ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="dataAbertura" class="form-label fw-bold">Data de Abertura do Serviço:</label>
                            <input type="text" class="form-control" id="dataAbertura" name="dataAbertura" value="<?= $dataAbertura ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="dataConclusao" class="form-label fw-bold">Data de Conclusão do Serviço:</label>
                            <input type="text" class="form-control" id="dataConclusao" name="dataConclusao" value="<?= $dataConclusao ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="emailPrestador" class="form-label fw-bold">E-mail do Prestador:</label>
                            <input type="text" class="form-control" id="emailPrestador" name="emailPrestador" value="<?= $emailPrestador ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nota" class="form-label fw-bold">Nota:</label>
                            <div class="d-flex justify-content-around">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nota" id="nota1" value="1" required>
                                    <label class="form-check-label" for="nota1">
                                        1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nota" id="nota2" value="2">
                                    <label class="form-check-label" for="nota2">
                                        2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nota" id="nota3" value="3">
                                    <label class="form-check-label" for="nota3">
                                        3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nota" id="nota4" value="4">
                                    <label class="form-check-label" for="nota4">
                                        4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nota" id="nota5" value="5">
                                    <label class="form-check-label" for="nota5">
                                        5
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="comentario" class="form-label fw-bold">Comentário:</label>
                            <textarea class="form-control" id="comentario" name="comentario" rows="3" placeholder="Deixe seu comentário aqui..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Registrar Avaliação</button>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php
    include("../includes/footer.html");
    ?>

</body>

</html>