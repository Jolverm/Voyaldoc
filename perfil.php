<?php include'header.php' ;?>
<!-- Contenedor principal-->
<div class="container"> 
  <?php include'topBanner.php'; ?>
  <!--inicia menu Perfil Paciente -->
  <ul class="nav nav-tabs menu-perfil">
    <li class="active"><a href="#calendario">Mi Calendario</a></li>
    <li><a href="#cuenta">Mi Cuenta / Contraseña</a></li>
  </ul><!--Termina menu Perfil Paciente -->
  <div class="borderArt"></div> 
  <!-- inicia Contenedor Tabs Perfil Paciente-->
  <div class="tab-content perfil">
    <!-- inicia pestaña Mi calendario -->
    <div class="tab-pane fade active in" id="calendario">
      <h1 class="tit-perfil">Tolas las Citas</h1>
      <a class="btn btn-primary exportarCita" href="#" role="button">Exportar Citas</a>
      <div class="row">
        <div class="calendario">
        </div>
      </div>
    </div><!-- termina pestaña Mi calendario -->
    
    <!-- inicia pestaña Mi cuenta -->
    <div class="tab-pane fade" id="cuenta">
      <div class="col-lg-9 col-md-9 cuenta">
       <h3 class="tit-cuenta">Mi cuenta / Cambio de contraseña</h3>
       <ul class="datos">
         <li>E-mail: <span class="info-datos">alex.gaza@hotmail.com</span></li>
         <li>Nombre: <span class="info-datos">Alejandro García</span></li>
         <li>Código Postal: <span class="info-datos">04300</span></li>
         <li>Fecha de Nacimiento: <span class="info-datos">01/08/87</span></li>
       </ul>
       <div class="row">
        <div class="col-lg-1 col-md-1 btnEditarPerfilP">
          <a class="btn btn-success" href="#" role="button">Editar</a>
       </div>
       <div class="col-lg-2 col-md-3 btnEditarContraP"> 
          <a class="btn btn-warning" href="#" role="button">Cambiar Contraseña</a>
         </div>
       <div class="col-lg-2 col-md-3">
        <a class="btn btn-primary" href="#" role="button">Cerrar Sesión</a>
       </div>
     </div>
   </div>
   <?php include'bannerlateral.php';?>
 </div><!-- termina pestaña Mi cuenta -->
</div><!-- Termina Contenedor Tabs Perfil Paciente -->
</div><!-- Contenedor principal-->

<?php include'footer.php' ;?>
