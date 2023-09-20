<?php
require("routes.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Serviço Fácil | Home</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body class="bg-light">
    <?php
    include("components/header.html");
    ?>

    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-sm-left">Bem-vindo ao Serviço Fácil</h1>
                <small>A plataforma que torna a manutenção da sua casa mais simples e conveniente.</small>
                <p class="lead mt-4">O Serviço Fácil oferece uma ampla variedade de serviços de reparo doméstico, desde encanamento e eletricidade até serviços de construção e reforma.</p>
                <p class="lead">Nossa missão é facilitar a vida dos clientes, conectando-os a prestadores de serviços qualificados e confiáveis.</p>

                <a href="solicitar-servico" class="btn btn-success btn-lg">Solicitar Serviço</a>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1554995207-c18c203602cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Imagem de casa" class="img-fluid rounded" />
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <ion-icon size="large" name="checkmark-circle" class="icon"></ion-icon>
                        <h3>Facilidade de Uso</h3>
                        <p>Agende um serviço em poucos cliques e tenha acesso a prestadores de confiança.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <ion-icon size="large" name="time" class="icon"></ion-icon>
                        <h3>Rápido e Conveniente</h3>
                        <p>Obtenha reparos domésticos de forma rápida e conveniente, no seu horário preferido.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <ion-icon size="large " name="wallet" class="icon"></ion-icon>
                        <h3>Preços Competitivos</h3>
                        <p>Oferecemos preços competitivos para todos os tipos de serviços de reparo.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>



</body>

</html>