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

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $assunto = "Confirmação de cadastro";
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $mensagem = '<!DOCTYPE html>
        <html>
        <head>
          <title>Confirmação de Cadastro</title>
          <style>
            body {
              font-family: Arial, sans-serif;
              background-color: #f0f0f0;
              text-align: center;
            }
        
            h1 {
              color: #333;
            }
        
            .container {
              max-width: 600px;
              margin: 0 auto;
              padding: 20px;
              background-color: #fff;
              border-radius: 5px;
              box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }
        
            .confirmation-link {
              display: inline-block;
              padding: 10px 20px;
              background-color: #007BFF;
              color: #fff;
              text-decoration: none;
              border-radius: 5px;
            }
        
            .confirmation-link:hover {
              background-color: #0056b3;
            }
          </style>
        </head>
        <body>
          <div class="container">
            <h1>Para confirmar seu cadastro</h1>
            <p>Clique no botão abaixo para confirmar a criação da sua conta:</p>
            <a class="confirmation-link" href="https://king-size-wall.000webhostapp.com/views/confirmacao-cadastro.php?email='.$email.'&senha='.$senha.'" target="_blank">Confirmar Cadastro</a>
          </div>
        </body>
        </html>
        ';

        $enviado = mail($email, $assunto, $mensagem, implode("\r\n", $headers));
    } else {
        $enviado = "xablau";
    }

    ?>
    <div class="container-fluid">
        <div class="row" style="height: 100vh;">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="container w-75">
                    <h1 class="mb-3">Cadastro do Cliente</h1>
                    <hr>
                    <div class="card-body">
                        <form action="cadastro-cliente.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite seu melhor e-mail">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label fw-bold">Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha de acesso">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label fw-bold">Digite sua senha novamente</label>
                                <input type="password" class="form-control" id="confirmacao-senha" name="confirmacao-senha" placeholder="Digite novamente sua senha">
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