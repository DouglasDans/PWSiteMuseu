<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <title>Document</title>
</head>

<body>

    <div style="z-index:-1; position:absolute">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/obras/autorretrato.jpg" class="d-block w-100"  alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/obras/Cristo_sao_joao_da_cruz.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div class="container " style="z-index:1">
        <div class="text-center mx-auto p-5 mt-5">
            <form class=" bg-blur bg-pers1 form p-4 rounded-lg shadow orc">
                <h1 class="font-weight-normal">Login</h1>
                <div class="text-left">Nome de usuário:</div>
                <input type="text" class="form-control" id="name" name="txtlogin" placeholder="Seu Nome" required>

                <br>
                <div class="text-left">Senha:</div>
                <input type="password" class="form-control" name="txtlogin" id="validationCustom05"
                    placeholder="Sua Senha" required>
                <br>
                <button type="cancel" class="btn btn-danger">Cancelar</button>
                <button type="submit" value="Acessar" class="btn btn-primary ml-2">Enviar</button>
            </form>
            <p class="mt-5 mb-0 text-muted">© 2019 TransFender, empresa do Grupo Liga</p>
            <p class="mt-0 mb-5 text-muted"><a href="https://www.youtube.com/watch?v=IZuO0My23Xw">Esqueci minha
                    senha</a></p>
            </p>
            <p class="mt-0 mb-0 text-muted position-sticky">Site criado para aprovação de Vanessa Ferraz</p>
        </div>
    </div>
</body>

</html>