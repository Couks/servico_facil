<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Serviço Fácil | Login</title>
    <link rel="stylesheet" href="../assets/index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body class="bg-white">

    <?php
    include("../includes/header.html");
    ?>

    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="mb-3">Login</h1>
                    <hr>
                    <div class="card-body">
                        <form action="POST">
                            <div class="mb-3">
                                <label for="email-login" class="form-label fw-bold">E-mail</label>
                                <input type="email" class="form-control" id="email-login" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
                                <small id="emailHelp" class="form-text text-muted">Nós nunca vamos compartilhar seu e-mail com ninguém.</small>
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label fw-bold">Senha</label>
                                <input type="password" class="form-control" id="pass" placeholder="Digite sua senha de acesso">
                            </div>

                            <button type="submit" class="btn btn-success btn-block col-md-12">Enviar</button>
                        </form>
                        <div class="justify-content-around">
                            <div class="mt-3">
                                <a href="../views/cadastro-cliente.php">
                                    Quero ser cliente do Serviço Fácil
                                </a>
                            </div>

                            <div class="mt-3">
                                <a href="../views/cadastro-prestador.php">
                                    Sou profissional e quero me candidatar a prestar Serviços
                                </a>
                            </div>
                        </div>
                    </div>
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