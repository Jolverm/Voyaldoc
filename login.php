<?php include'header.php' ;?>

<!-- Contenedor principal-->
<div class="container"> 
	<!-- Incluye banner-->
  <?php include'topBanner.php' ;?>
  <!-- Inician formularios de login-->
  <div class="col-lg-6 col-md-6">

  	<div class="col-lg-8 col-md-8 iniciaSesionLogin">
  		<div class="iniciaSesionTitulo">Inicia Sesión</div>
  		<img src="img/FacebookLogin.png" alt="Inicia sesión con Facebook">
  		<span> o tu usuario y contraseña:</span>
  		<form role="form" class="formIniciarSesion">
  <div class="form-group">
    <input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="password" placeholder="contraseña">
  </div>
  <button type="submit" class="btn btn-default sesion">Iniciar Sesión</button>
</form>
  	</div>
  </div>

  <div class="col-lg-6 col-md-6 ">
  	<div class="col-lg-8 col-md-8 registroLogin">
  		<div class="registroTitulo">
  			¿Nos visitas por primera vez?
  		</div>
  	</div>
  </div>
  <!-- Terminan formularios de login-->





</div><!-- Contenedor principal-->

<?php include'footer.php' ;?>