<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cadastro do Cliente</title>
    <link rel="stylesheet" href="../assets/index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="height: 100vh;">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="container w-75">
                    <h1 class="mb-3">Cadastro do Cliente</h1>
                    <hr>
                    <div class="card-body">
                        <form action="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label fw-bold">E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu melhor e-mail">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label fw-bold">Senha</label>
                                <input type="password" class="form-control" id="pass" placeholder="Digite sua senha de acesso">
                            </div>
                            <div class="mb-3">
                                <label for="pass-confirmation" class="form-label fw-bold">Digite sua senha novamente</label>
                                <input type="password" class="form-control" id="pass-confirmation" placeholder="Digite novamente sua senha">
                            </div>
                            <button type="submit" class="btn btn-success col-md-12">Registrar</button>
                        </form>
                        <p class="mt-3 text-center">Já tem uma conta? <a href="./login.php">Faça login aqui</a></p>
                    </div>
                </div>
            </div>
            <div class=" col-md-6 bg-dark d-flex align-items-center justify-content-center rounded">
                <div class="text-center text-white container ">
                    <img src="https://i.ibb.co/GCRGqJf/servico-facil-branco.png" alt="" class="img-fluid rounded">
                    <h1 class="my-4">Bem-vindo ao Serviço Fácil</h1>
                    <p class="lead">A plataforma que torna a manutenção da sua casa mais simples e conveniente.</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>