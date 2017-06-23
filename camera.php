<!DOCTYPE html>
<?php
   define('BASE_DIR', dirname(__FILE__));
   require_once(BASE_DIR.'/config.php');
   
   function getImgWidth() {
      global $config;
      if($config['vector_preview'])
         return 'style="width:' . $config['width'] . 'px;"';
      else
         return '';
   }
   
   function getLoadClass() {
      global $config;
      if(array_key_exists('fullscreen', $config) && $config['fullscreen'] == 1)
         return 'class="fullscreen" ';
      else
         return '';
   }

   if (isset($_POST['extrastyle'])) {
      if (file_exists('css/' . $_POST['extrastyle'])) {
         $fp = fopen(BASE_DIR . '/css/extrastyle.txt', "w");
         fwrite($fp, $_POST['extrastyle']);
         fclose($fp);
      }
   }

   function getDisplayStyle($context, $userLevel) {
		switch($context) {
			case 'navbar':
				if ($userLevel == USERLEVEL_MIN)
					echo 'style="display:none;"';
				break;
			case 'actions':
				if ($userLevel == USERLEVEL_MIN)
					echo 'style="display:none;"';
				break;
			case 'settings':
				if ((int)$userLevel != USERLEVEL_MAX)
					echo 'style="display:none;"';
				break;
		}
   }
   
/*   $toggleButton = "Simple";
   $displayStyle = 'style="display:block;"';
   if(isset($_COOKIE["display_mode"])) {
      if($_COOKIE["display_mode"] == "Simple") {
         $toggleButton = "Full";
         $displayStyle = 'style="display:none;"';
      }
   }*/
   
   $streamButton = "MJPEG-Stream";
   $mjpegmode = 0;
   if(isset($_COOKIE["stream_mode"])) {
      if($_COOKIE["stream_mode"] == "MJPEG-Stream") {
         $streamButton = "Default-Stream";
         $mjpegmode = 1;
      }
   }
   $config = readConfig($config, CONFIG_FILE1);
   $config = readConfig($config, CONFIG_FILE2);
   $video_fps = $config['video_fps'];
   $divider = $config['divider'];
   $user = apache_getenv("REMOTE_USER");
   writeLog("Logged in user:" . $user . ":");
   $userLevel =  getUserLevel($user);
   writeLog("UserLevel " . $userLevel);
  ?>

<html>
   <head>
      <meta name="viewport" content="width=550, initial-scale=1">
      
		    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
      
      
      <script src="js/style_minified.js"></script>
      <script src="js/script.js"></script>
      <script src="js/pipan.js"></script>
      <script src="js/jquery.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>
  		<script src="js/datetimepicker.js"></script>
  		<script src="js/bootstrap-select.js"></script>
  		<script src="js/application.js"></script>
  		
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
   <body onload="setTimeout('init(<?php echo "$mjpegmode, $video_fps, $divider" ?>);', 100);">
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
        <a href="home.html" class="navbar-brand">
          <img src="img/logo.png" class="logo">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar">

        <!--/Main navigation-->
        <div class="main-navigation">
          <div class="container">
            <ul class="nav navbar-nav">
              <li><a href="index.php"><i class="fa fa-calendar"></i> HOME </a></li>
              <li class="active" ><a href="camera.php"><i class="fa fa-calendar"></i> CÂMERA </a></li>
              <li><a href="horarios.php"><i class="fa fa-list"></i> HORÁRIOS </a></li>
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
<h1>Câmera</h1>


    <div class="row">
      <div class="col-sm-2">
          <div class="panel-body">
            <ul class="list-unstyled legend-list">
              <a href="abrir_caixa_camera.php" class="btn btn-lg btn-primary">Abrir</a>
            </ul>
          </div>
      </div><!--/.col-->



      <div class="col-sm-10">
        <div class="panel panel-default">
          <div class="panel-body">
            <div><img id="mjpeg_dest" <?php echo getLoadClass() . getImgWidth();?>
		 <?php if(file_exists("pipan_on")) echo "ontouchstart=\"pipan_start()\""; ?> onclick="toggle_fullscreen(this);" src="./loading.jpg" style="width:100%"></div>
          </div>
        </div><!--/.panel-->
      </div><!--/.col-->
    </div><!--/.row-->
    <div id="atu" style="display: none;">
    </div>
    <footer id="page-footer">
      <div class="educat-logo"></div>
      <ul>
        <li><a href="#">Sobre o Educat</a></li>
        <li><a href="#">Perguntas frequentes</a></li>
        <li><a href="#">Reportar problema</a></li>
      </ul>
      <div class="r13">
        <span>desenvolvimento</span>
        <div class="r13-logo"></div>
      </div>
    </footer>


  </div>
      <div class="container-fluid text-center liveimage">
      </div>

    <script>  
    setInterval(function () {
        $("#atu").load("controle.php #atu");
    }, 1000)    
    </script>

      <?php if ($debugString != "") echo "$debugString<br>"; ?>
   </body>
</html>
