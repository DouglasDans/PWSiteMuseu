<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
  <title>Obras de Salvador Dalí</title>
</head>

<body class="bg-dark text-white">
  <?php
    require_once 'global.php';
  ?>
  <header>
    <div class="nav-container">
      <nav class="navbar navbar-dark bg-primary navbar-expand-lg bg-pers0 menu pl-2 pr-2">
        <a class="navbar-brand pl-2" href="index.php">
          <img src="img/dalidaonde.png" height="40px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto text-center justify-content-start">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <p class="textoMenu">Home</p>
              </a>
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
          </ul>
          <ul class="navbar-nav text-center justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="login.php">
                <p class="textoMenu">Login <i class="fas fa-sign-in-alt"></i></p>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <div class="bg-img">
    <center>
      <div class="bg-danger" style="height:40%;width:100%">
        uma foto aq em breve
       </div>
    </center>
  </div>

  <!-- NÃO SE ASSUSTE, SÃO APENAS TESTES! -->
  <?php
    try{
      $obra = new Obra();
      $listaobra = $obra->listar2();
    }
    catch(Exception $e){
      echo '<pre>';
        print_r($e);
      echo '</pre>';
      echo $e->getMessage();
    }
    
  ?>

  <div class="container" id="logo2">
    <div class="container text-center">
      <div class="row">

        <div class="col-2">
          <div class="text-left text-center rounded-sm img ">
            <div id="">
              <img src="https://cdn.pixabay.com/photo/2015/08/15/13/27/el-salvador-dali-889515_1280.jpg" width="180px"
                height="260px" class="rounded-lg p-0 mx-auto img shadow" alt="...">
            </div>
          </div>
        </div>

        <div class="col-10 mt-5">
          <div class="text-left  text-center p-1 rounded-sm">
            <div class="ml-3">
              <div class="font-weight-bold text-left h1 m-4">
                Salvador Dalí - A Exposição Digital<br>
              </div>
              <div class="text-left ml-4">
                <p>Divirta-se na nossa exposição digital de Salvador Dalí, o tempo é ilimitado</p>
                <small class="text-muted">Criado por Paralax DD Livros e Aviaras Technology</small>
              </div>
            </div>
          </div>
        </div>
         
      </div>
    </div>
    <main class="mt-5 mb-5">

    <div class="hoverzoom">
      <img class="rounded" src="img/lenildo_noel.png" alt="Obras de Dalí" />
      <div class="retina">
          <p>Lenildo Natal</p>
          <a href="#">Veja em alta qualidade</a>
      </div>
    </div>

    <!--- TAMBÉM É TESTE, SUJEUTO A MUDANÇAS -->
    <?php
      foreach ($listaobra as $linha){
    ?>
      <div class="container mt-5">
        <div class="row align-items-center">
          <div class="col-4">
            <img src="<?php echo $linha['caminhoImagem']?>" class="img-fluid areaLogin">
          </div>
          <div class="col-8">
            <h1><?php echo $linha['nomeObra'] ?></h1>
            <h4 class="subtitulo-obra">Autor: <?php echo $linha['nomeAutor'] ?></h4>
            <p class="texto-obra">Categoria: <?php echo $linha['descCategoria'] ?></p>
            <button class="btn-outline-warning btn-block btn-lg btn-cadastro" data-toggle="modal" data-target="#exampleModal">Alta Qualidade</button>
          </div>
        </div>
      </div>
    <?php
      }
    ?>




      <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>esse é o meu caminho e nele eu vou</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    

    </main>
</div>
  
    


  <script src="js/bootstrap.min.js"></script>
   <script src="js/scripts.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
</body>

</html>