<?php include'header.php' ;?>

<!-- Contenedor principal-->
<div class="container"> 
  <!-- Incluye banner-->
  <?php include'topBanner.php' ;?>
  <!-- Inician formulario busqueda avanzada-->
  <div class="col-lg-9 col-md-9 busquedaDr">
    <div class="col-lg-12 col-md-12">
      <div class="col-lg-6 col-md-8 busquedaDrTitulo">Búsqueda Avanzada
        <span> (Elige uno o varios criterios de búsqueda) </span>
      </div>
    </div>

       <form role="form" class="busquedaDrform">
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Nombre</label>
          <input type="text" class="form-control" id="nombre">
        </div>
        <div class="col-lg-6 col-md-6">
          <label >Hospital</label>
          <input type="text" class="form-control" name="hospital" id="hospital">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Ubicación</label>
          <select class="form-control" name="ubicacion" id="ubicacion">
              <option value="">Selecciona una Opción</option>
          </select>
          <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Colonia, Delegación, etc."> 
        </div>
        <div class="col-lg-6 col-md-6">
          <label >Especialidad</label>
          <select class="form-control" name="especialidad" id="especialidad">
              <option>Selecciona una Opción</option>
          </select><br><br>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Aseguradora</label>
          <select class="form-control" name="aseguradora" id="aseguradora">
              <option value="">Selecciona una Opción</option>
          </select>
        </div>
        <div class="col-lg-6 col-md-6">
          <label >Costo</label>
          <select class="form-control" name="costo" id="costo">
              <option value="">Selecciona una Opción</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6 fechaNacimiento">  
          <label >Padecimiento</label>      
          <input type="text" class="form-control" name="padecimiento" id="padecimiento">
          </div>
          <div class="col-lg-6 col-md-6">
          <label >Tratamiento</label>
          <input type="text" class="form-control" name="tratamienro" id="tratamienro">
          </div>
      </div>    

      <div class="form-group">
        <button type="submit" class="btn btn-default registrarme">Buscar</button>
      </div>
    </form>
    
  
  </div><!-- Termina formulario de busqueda avanzada-->

<?php include'bannerLateral.php' ;?>

<?php include'bannerLlamada.php' ;?>

</div><!-- Contenedor principal-->

<?php include'footer.php' ;?>