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
              <li><a href="index.php"><i class="fa fa-home"></i> HOME </a></li>
              <li><a href="camera.php"><i class="fa fa-camera"></i> CÂMERA </a></li>
              <li class="active" ><a href="horarios.php"><i class="fa fa-clock-o"></i> HORÁRIOS </a></li>
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
              <li><a href="#">Sair</a></li>
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
    <!--/.container-->
<div class="container">

    <h1>Horários</h1>


    <div class="row">
      <div class="col-xs-9">
        <div class="panel">
          <div class="panel-body">
            <div class="page-header">
              <h2>Horários Registrados</h2>
            </div>
            <div class="row">
              <div class="form-group col-xs-3">
              <label class="control-label">Horário 1 <i class="fa fa-question-circle hastooltip" title="" data-original-title="Texto de ajuda"></i></label>
              <strong><?php echo "" . $_SESSION["hora"] .":". $_SESSION["minuto"] . "" ?></strong>
            </div>
            </div>
            <div class="row">
              <div class="form-group col-xs-3">
              <label class="control-label">Horário 2 <i class="fa fa-question-circle hastooltip" title="" data-original-title="Texto de ajuda"></i></label>
              <strong><?php echo "" . $_SESSION["hora1"] .":". $_SESSION["minuto1"] . "" ?></strong>
            </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-3">
              <label class="control-label">Horário 3 <i class="fa fa-question-circle hastooltip" title="" data-original-title="Texto de ajuda"></i></label>
              <strong><?php echo "" . $_SESSION["hora2"] .":". $_SESSION["minuto2"] . "" ?></strong>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>

      <div class="row">
      <div class="col-xs-9">
        <div class="panel">
          <div class="panel-body">
            <div class="page-header">
              <h2>Alterar Horários</h2>
            </div>
            <form method="POST" action="salvar.php">
            <div class="row">
              <div class="form-group col-xs-2">
              <label class="control-label">Hora 1 <i class="fa fa-question-circle hastooltip" title="" data-original-title="Texto de ajuda"></i></label>
              <input type="text" class="form-control" id="hora" name="hora" maxlength="2">
              </div>
              <div class="form-group col-xs-2">
              <label class="control-label">Minuto 1 <i class="fa fa-question-circle hastooltip" title="" data-original-title="Texto de ajuda"></i></label>
              <input type="text" class="form-control" id="minuto" name="minuto" maxlength="2"/>
            </div>
            </div>
            
            <div class="row">
              <div class="form-group col-xs-2">
              <label class="control-label">Hora 2 <i class="fa fa-question-circle hastooltip" title="" data-original-title="Texto de ajuda"></i></label>
              <input type="text" class="form-control" id="hora1" name="hora1" maxlength="2">
              </div>
              <div class="form-group col-xs-2">
              <label class="control-label">Minuto 2 <i class="fa fa-question-circle hastooltip" title="" data-original-title="Texto de ajuda"></i></label>
              <input type="text" class="form-control" id="minuto1" name="minuto1" maxlength="2"/>
            </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-2">
              <label class="control-label">Hora 3 <i class="fa fa-question-circle hastooltip" title="" data-original-title="Texto de ajuda"></i></label>
              <input type="text" class="form-control" id="hora2" name="hora2" maxlength="2">
              </div>
              <div class="form-group col-xs-2">
              <label class="control-label">Minuto 3 <i class="fa fa-question-circle hastooltip" title="" data-original-title="Texto de ajuda"></i></label>
              <input type="text" class="form-control" id="minuto2" name="minuto2" maxlength="2"/>
            </div>
            </div>
            
            <div class="row">
            <div class="form-group col-xs-2">
            <input type="submit" class="btn btn-lg btn-primary" value="Salvar">
            </div>            
            </div>
            
            </form>
            <div id="atu" style="display: none;">
            </div>
      </div>
    </div>
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
  </body>

