<?php include'header.php' ;?>

<!-- Contenedor principal-->
<div class="container"> 
  <!-- Incluye banner-->
  <?php include'topBanner.php' ;?>
  <!-- inicia Contacto -->
  <div class="col-lg-9 col-md-9 contenidoEstaticoPag">
    <div class="col-lg-12 col-md-12">
     <h1>¿Tienes dudas, comentarios o quieres hacer una cita?</h1>
     <h2>¡Escríbenos a Voy al Doc!</h2>

     <p>Ayuda en Centro Telefónico de Voy al Doc</p>
<p>Horarios de atención: de Lunes a Viernes de 9am a 8pm y Sábados de 9am a 2pm</p>
<p>Contáctanos en info@voyaldoc.com</p>
     <!-- inicia Formulario Contacto -->
     <form role="form" class="formRegistro">
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Nombre*</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" required="required">
        </div>
        <div class="col-lg-6 col-md-6">
          <label >Apellido paterno*</label>
          <input type="text" class="form-control" id="apellidoPat" placeholder="Ingresa tus apellidos" required="required">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Apellido paterno*</label>
          <input type="text" class="form-control" id="apellidoPat" placeholder="Ingresa tus apellidos" required="required">
        </div>
        <div class="col-lg-6 col-md-6">
          <label >Teléfono*</label>
          <input type="text" class="form-control" id="telefono" placeholder="Comentarios" required="required">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Correo Electrónico*</label>
          <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" required="required">
        </div>
        <div class="col-lg-6 col-md-6">
          <label >Comentarios</label>
          <textarea rows="2" cols="30" class="form-control" id="comentarios" placeholder="Comentarios" required="required"></textarea>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success enviarContacto">Enviar</button>
      </div>
    </form><!-- Termina Formulario Contacto -->
  </div>
</div> <!-- Termina Contacto -->

<?php include'bannerlateral.php' ;?> 


</div><!-- Contenedor principal-->

<?php include'footer.php' ;?>