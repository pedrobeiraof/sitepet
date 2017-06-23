<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PET</title>

    <!-- ESTILOS GERAIS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-select.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datetimepicker.css" rel="stylesheet">
    <link href="css/application.css" rel="stylesheet">

    <!-- ESTILOS ESPECÍFICOS-->
    <link href="css/summernote.css" type="text/css" rel="stylesheet">
    <link href="css/line.css" rel="stylesheet">


    <!-- FONTES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,800,700italic,800italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#46c0f5">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Educat">
    <meta name="application-name" content="Educat">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

  </head>

<body>

  <!--NAVIGATION-->
  <div id="navigation" class="navbar navbar-default">
    <div class="container">

      <div class="navbar-header">
        <button data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
          <span class="sr-only">Exibir navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">
          <img src="img/logo.png" class="logo">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar">

        <!--/Main navigation-->
        <div class="main-navigation">
          <div class="container">
            <ul class="nav navbar-nav">
              <li class="active" ><a href="index.php"><i class="fa fa-home"></i> HOME </a></li>
              <li><a href="camera.php"><i class="fa fa-camera"></i> CÂMERA </a></li>
              <li><a href="horarios.php"><i class="fa fa-clock-o"></i> HORÁRIOS </a></li>
              <li><a href="#"><i class="fa fa-file-text"></i> DOWNLOAD </a></li>
              <li><a href="configuracao.php"><i class="fa fa-bar-chart"></i> CONFIGURAÇÕES </a></li>
            </ul>
          </div>
        </div>

        <ul class="nav navbar-nav navbar-right">

          <!--/User dropdown-->
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/user-small.png" alt="Paulo Gentil" class="img-circle">
              Paulo Gentil
              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="preferencias.html">Meu Perfil</a></li>
              <li><a href="alterar-senha.html">Alterar senha</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../">Sair</a></li>
            </ul>
          </li>
        </ul>

        <form class="navbar-form navbar-right" role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="pesquisar">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
          </div><!-- /input-group -->
        </form>

      </div><!-- /.navbar-collapse -->
    </div>
  </div><!--/#navigation-->
    <div class="text-center">
      <div class="jumbotron">
        <div class="container-fluid">
          <h1>Olá, Paulo!</h1>
          <div id="atu2">
          <p>O cachorro está:<br><strong>
           <?php
          session_start();        
          
          $a = $_SESSION['proximidade'];              
          
          if($a == 1) {
            echo "Próximo";
          }
          else if($a == 0) {
            echo "Afastado";
           }
           ?>
          </strong></p>
          </div>
          
          <div id="atu" style="display: none"></div>

          <a href="abrir_caixa.php" class="btn btn-lg btn-primary">Abrir</a>
          <div class="line"></div>
          <h1>Horários Marcados</h1>
          <p>Horário 1 : <strong> <?php echo "" . $_SESSION["hora"] .":". $_SESSION["minuto"] . "" ?> </strong></p>
          <p>Horário 2 : <strong> <?php echo "" . $_SESSION["hora1"] .":". $_SESSION["minuto1"] . "" ?> </strong></p>
          <p>Horário 3 : <strong> <?php echo "" . $_SESSION["hora2"] .":". $_SESSION["minuto2"] . "" ?> </strong></p>

    </div>
    </div>

    <!--scripts-->
  
  
  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/datetimepicker.js"></script>
  <script src="js/bootstrap-select.js"></script>
  <script src="js/application.js"></script>
  
  <script>  
    setInterval(function () {
        $("#atu").load("controle.php #atu");
    }, 1000)    
  </script>
  
  <script>  
    setInterval(function () {
        $("#atu2").load("index.php #atu2");
    }, 1000)    
  </script>

</body>
</html>