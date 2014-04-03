<?php include'header.php' ;?>
<!-- Contenedor principal-->
<div class="borderArt"></div>
<div class="container"> 
<?php include'topBanner.php'?>

<ul class="nav nav-tabs menu-perfil"><!--inicia menu Perfil Usuario -->
  <li class="active"><a href="#calendario">Mi Calendario</a></li>
  <li><a href="#cuenta">Mi Cuenta / Contraseña</a></li>
</ul><!--Termina menu Perfil Usuario -->
  
  <!--inicia menu Perfil Usuario -->
  <div class="tab-content perfil">
    <!-- inicia pestaña Mi calendario -->
	<div class="tab-pane fade active in" id="calendario">
    <h1 class="tit-perfil">Tolas las Citas</h1>
    <div class="boton-azul"><a href="#" class="boton">Exportar Citas</a></div>

    <div class="row">
        <div class="calendario">
        </div>
    </div>
    </div>
      <!-- termina pestaña Mi calendario -->
    <div class="tab-pane fade" id="cuenta">
      <!-- inicia pestaña Mi cuenta -->
        <div class="col-lg-9 col-md-9 cuenta">
        	<h3 class="tit-cuenta">Mi cunta / Cambio de contraseña</h3>
            <ul class="datos">
            	<li>E-mail: <span class="info-datos">alex.gaza@hotmail.com</span></li>
                <li>Nombre: <span class="info-datos">Alejandro García</span></li>
                <li>Código Postal: <span class="info-datos">04300</span></li>
                <li>Fecha de Nacimiento: <span class="info-datos">01/08/87</span></li>
            </ul>
            <div class="row">
                <div class="col-lg-1 col-md-1">
                	<div class="btn-perfil"><a href="#" class="boton-verde">Editar</a></div>
                </div>
                <div class="col-lg-3 col-md-3 enmedio">    
                	<div class="btn-perfil"><a href="#" class="boton-naranja">Cambiar Contraseña</a></div>
                </div>
                <div class="col-lg-2 col-md-2 final">
                	<div class="btn-perfil"><a href="#" class="boton">Cerrar Sesión</a></div>
                </div>
            </div>
        </div>
		<!-- termina pestaña Mi cuenta -->

        <!-- banner lateral -->
        <div class="col-lg-3 col-md-3">
        </div>
        <!-- termina banner lateral -->
  </div>

</div><!-- Cierra contenido Perfil -->

</div><!-- Contenedor principal-->
 
<?php include'footer.php' ;?>
<script>
  $('.menu-perfil a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  })
  </script>