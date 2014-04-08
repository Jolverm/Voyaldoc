<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>¿Buscas doctores en México? Haz tu cita gratis y al instante - VoyalDoc</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/voyaldoc.css" rel="stylesheet">
  <link href="css/menu.css" rel="stylesheet" type="text/css">
  <link href="css/chosen/chosen.css" rel="stylesheet" type="text/css">
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      </script>

      <?php include('inc/detecta_movil.php');
      
      $detect = new Mobile_Detect();
      
      if ($detect->isMobile()) { ?>

      <div class="col-xs-12 menuMovil">
       <div class="botonMenuMovil">  
        <a href="#menu">
          <img src="img/menuMovil.png" alt="">
        </a>
      </div>
      <div class="logoMovil">
      </div>
    </div>

    <nav id="menu" class="logoMenu">
      <ul>
        <li><img src="img/logo-movil.png" alt=""></li>
        <li><a href="#">Encuentra un doctor</a></li>
        <li><a href="#">Iniciar sesión</a></li>
        <li class="link-menu">
          <a href="#">Informacion de Salud</a>
          <ul>
            <li><a href="#">Otorrinolaringólogo</a></li>
            <li><a href="#">Urólogo</a></li>
            <li><a href="#">Oftalmólogo</a></li>
            <li><a href="#">Psicólogo</a></li>
            <li class="divider"></li>
            <li><a href="#">Otros</a></li>
          </ul>
        </li>
        <li><a href="#">Términos de uso</a></li>
        <li><a href="#">Aviso de privacidad</a></li>
      </ul>
    </nav>



    <? } else{
      ?> 
      <!-- inicia Barra de navegacion-->
      <nav class="navbar navbar-default navbar-static-top hidden-xs" role="navigation">
        <div class="navbar-inner">
          <div class="container">
            <div class="row">
              <!-- Slogan -->
              <div class="col-md-5 sloganMenu hidden-xs ">
                <h1>Busca, elige y haz tu cita con los mejores doctores de la zona</h1>
              </div>
              <!-- FB contador -->
              <div class="col-md-1 col-lg-1 hidden-xs facebookMenu">
                <div class="fb-like" data-href="https://www.facebook.com/voyaldoc?fref=ts" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
              </div>
              <div class="col-lg-6 col-md-6">
               <div class="container-fluid">
                <!-- Inicio menu dropdown -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Información de salud<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Otorrinolaringólogo</a></li>
                        <li><a href="#">Urólogo</a></li>
                        <li><a href="#">Oftalmólogo</a></li>
                        <li><a href="#">Psicólogo</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Otros</a></li>
                      </ul>
                    </li>
                    <li><a href="login.php">Iniciar sesión</a></li>
                    <li><a href="registro.php">Registrarse</a></li>
                  </ul>
                </div><!-- FIn menu dropdown -->
              </div><!-- /.container-fluid -->
            </div>
          </div>
        </div>
      </div>
    </nav><!-- Termina Barra de navegacion-->
    <?
    
  }
  ?>
