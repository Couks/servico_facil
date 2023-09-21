<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Serviço Fácil | Solicitar Serviço</title>
    <link rel="stylesheet" href="../assets/index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body class="bg-light">
    <?php
    include("../includes/header.html");

    $jsonFile = file_get_contents("../controllers/servicos-data.json"); 
    $data = json_decode($jsonFile, true);

    if ($data !== null) {
        $categorias = $data["categorias"];
        $primeiraCategoria = reset($categorias);
        $servicos = $data["servicos"][$primeiraCategoria];
    } else {

        $categorias = ["Erro ao carregar categorias"];
        $servicos = ["Erro ao carregar serviços"];
    }
    ?>

    <main class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <h1 class="mb-4">Escolha o Serviço Desejado</h1>
                    <hr>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="tipoServico" class="form-label fw-bold">Tipo de Serviço</label>
                                <select class="form-select" id="tipoServico" name="tipoServico">
                                    <?php foreach ($categorias as $categoria) : ?>
                                        <option value="<?= $categoria ?>"><?= $categoria ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="servico" class="form-label fw-bold">Serviço</label>
                                <select class="form-select" id="servico" name="servico">
                                    <?php foreach ($servicos as $servico) : ?>
                                        <option value="<?= $servico ?>"><?= $servico ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-block" style="width: 100%;">Escolher</button>
                        </form>
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
