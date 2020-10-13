<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Obra</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
</head>

<body class="bg-pers1">

   <div class="nav-container">
      <nav class="navbar navbar-dark bg-primary navbar-expand-lg bg-pers0 menu pl-2 pr-2">
        <a class="navbar-brand pl-2" href="index-area-restrita.php">
          <img src="../img/dalidaonde.png" height="40px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto text-center justify-content-start">
            <li class="nav-item">
              <a class="nav-link" href="index-area-restrita.php"><p class="textoMenu">Home</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><p class="textoMenu">Ingressos</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><p class="textoMenu">Parceria</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><p class="textoMenu">Fale Conosco</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><p class="textoMenu">Cadastrar Obra</p></a>
            </li>
          </ul>
          <ul class="navbar-nav text-center justify-content-end">
            <li class="nav-item">
                <a class="nav-link"><p class="textoMenu">Bem vindo, adm <i class="fas fa-user-shield"></i></p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../logout.php"><p class="textoMenu">Sair <i class="fas fa-sign-out-alt"></i></p></a>
            </li>
          </ul>
        </div>
      </nav>
   </div>

   <div class="view pt-5 pb-5" style="background-image: url(../img/obras/A_tentacao_de_santo_Antonio.jpg); background-repeat:no-repeat; background-size:cover; background-position: center center">
      <div>
          <div class="container mt-4 mb-4">
              <div class="justify-content-center">
                  <div class="card text-center areaLogin w-75 mx-auto p-4">
                      <div class="row">
                          <form class="p-4" name="CadastrarObra" method="POST" action="../inserir-obra.php">
                              <img src="../img/vetor_exibicao.png" class="pb-4 vetorExposicao img-fluid">
                              <h1 class="display-4">Cadastrar Nova Obra</h1>
                              <label class="labelFormulario mt-5 pb-2">Nome da Obra</label>
                              <input type="text" class="form-control text-center" id="txtNomeObra" name="txtNomeObra" placeholder="Ex: Galetea de Esferas" required>
                              <label class="labelFormulario mt-5 pb-2">Categoria da Obra</label>
                              <input type="text" class="form-control text-center" id="txtCategoriaObra" name="txtCategoriaObra" placeholder="Ex: Quadro, Escultura, etc..." required>
                              <label class="labelFormulario mt-5 pb-2">Período da Obra</label>
                              <input type="text" class="form-control text-center" name="txtPeriodoObra" id="txtPeriodoObra" placeholder="Ex: Realismo, Cubismo, Surrealismo, etc..." required>
                              <label class="labelFormulario mt-5 pb-2">Ano da Obra</label>
                              <input type="text" class="form-control text-center" name="txtAnoObra" id="txtAnoObra" placeholder="Por favor inserir o ano no formato de 4 dígitos" required>
                              <div class="row pl-2 pr-2 mt-5">
                                  <button type="submit" value="CadastrarObra" class="btn-block btn-lg btn-outline-warning">Cadastrar Obra</button>
                              </div>
                          </form>
                      </div>
                    <div class="row">
                      <p class="mt-4 mb-0 text-muted">© 2020 DDLivros & Aviaras - Parceria entre Paralax e Aviaras Technology</p>
                      <p class="mt-0 mb-0 text-muted position-sticky">Site criado para aprovação de Vanessa Ferraz</p>
                    </div>
                  </div>
              </div>    
          </div>
      </div>
   </div>

   <script src="../js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</body>