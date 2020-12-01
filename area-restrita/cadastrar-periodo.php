<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Período</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
</head>

<body class="bg-dark">
<?php
  include("valida-sentinela.php");
?>
<header>
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
              <a class="nav-link" href="sessao.php">
                <p class="textoMenu">Exposição Digital</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="biografia.php">
                <p class="textoMenu">Biografia de Dalí</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastrar-obra.php"><p class="textoMenu">Cadastrar Obra</p></a>
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
  </header>


   <div class="view pt-5 pb-5" style="background-image: url(../img/bg_periodo.jpg); background-repeat:no-repeat; background-size:cover; background-position: center center">
      <div>
          <div class="container mt-4 mb-4">
              <div class="justify-content-center">
                  <div class="card text-center areaLogin w-75 mx-auto p-4">
                      <div class="row">
                          <form class="p-4" name="CadastrarPeriodo" method="POST" action="../inserir-periodo.php">
                              <img src="../img/vetor_periodo.png" class="pb-4 vetorExposicao img-fluid">
                              <h1 class="display-4">Cadastrar Período</h1>
                              <label class="labelFormulario mt-5 pb-2">Período da Obra</label>
                              <input type="text" class="form-control text-center" name="txtPeriodoObra" id="txtPeriodoObra" placeholder="Ex: Realismo, Cubismo, Surrealismo, etc..." required>
                              <div class="row pl-2 pr-2 mt-5">
                                  <button type="submit" value="CadastrarPeriodo" onclick=avisar()  class="btn-cadastro btn-block btn-lg btn-outline-warning">Cadastrar Período</button>
                                  <script>
                                    function avisar(){
                                          alert("Período cadastrado no banco de dados com sucesso");
                                      }
                                  </script>
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

   <footer class="pt-2 bordaRodape bg-pers0 text-white">
    <div class="container-fluid">
      <div class="row pl-5 pr-5">
        <div class="col-md-3 pt-3 pb-3">
          <img class="mb-2 img-fluid" src="../img/DD-Paralax.png">
        </div>
        <div class="col-md-6">
          <!-- nao coloca nada aqui nao -->
        </div>
        <div class="col-md-3 pt-3 pb-3">
          <img class="mb-2 img-fluid" src="../img/logoMista.png">
        </div>
      </div>
      <div class="row text-center pt-4">
        <div class="col-md-4 pb-5">
          <h3 class="linhaTitulo">Sobre</h3>
          <a href="../equipe.php" class="textoRodape">Equipe</a>
          <br>
          <a href="https://github.com/DouglasDans/PWSiteMuseu" class="textoRodape">Github</a>
        </div>
        <div class="col-md-4 pb-5">
          <h3 class="linhaTitulo">Fale Conosco</h3>
          <a href="https://www.youtube.com/watch?v=iW1Nff6jgjo" class="textoRodape">Telefone</a>
          <br>
          <a href="https://www.youtube.com/watch?v=pYcpZJVmXvU" class="textoRodape">Email</a>
        </div>
        <div class="col-md-4 pb-5">
          <h3 class="linhaTitulo">Doações</h3>
          <a href="https://www.youtube.com/watch?v=2q82bGtujFA" class="textoRodape">Bitcoins</a>
          <br>
          <a href="https://www.youtube.com/watch?v=000al7ru3ms" class="textoRodape">Dogecoins</a>
        </div>
      </div>
    </div>
    <div class="bordaRodape bg-pers1">
      <center><small class="text-center">DD Livros ©2020 Paralax Corporation</small></center>
      <center><small class="text-center">Aviaras ©2020 Aviaras Technology</small></center>
    </div>
  </footer>

   <script src="../js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</body>