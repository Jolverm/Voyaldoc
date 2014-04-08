<?php include'header.php' ;?>

<!-- Contenedor principal-->
<div class="container"> 
  <?php include'buscador-filtro.php' ;?>
  <!-- inicia contenido resultados de busqueda-->
	<div class="col-lg-12 col-md-12 hidden-xs text_resultado">
    Resultado de 
    </div>
    
        <!-- Inicia contenedor resultados de busqueda-->
      <div class="col-lg-9 col-md-9 hidden-xs">
        <!-- inician resultados -->
    	<div class="row resultado">
            <div class="col-lg-2 col-md-2 hidden-xs avatar">
            	<img src="img/avatar.jpg" class="img-responsive">
            </div>

        <div class="col-lg-3 col-md-3 hidden-xs">
 	        <div class="row titulo-dr">Dr. José Arturo Avilés Román</div>
            <div class="row">
            <span class="subtitulo">Alergólogo, Inmunólogo</span>
            Consultorio Agrícola Oriental
            Av Javier Rojo Goméz 228 SN
            Col. Agrícola Oriental
            Del. Iztacalco CP 08500
            Distrito Federal 
            </div>
        </div>

        <!--inicia el calendario de fechas -->
            <div class="col-lg-1 col-md-1 semana-inicio">
                <h4 class="tit-dia">Lun</h4>
                31 Mar
            </div> 
            <div class="col-lg-1 col-md-1 semana1">
                <h4 class="tit-dia">Mar</h4>
                01 Abr
            </div>
            <div class="col-lg-1 col-md-1 semana">
                <h4 class="tit-dia">Mié</h4>
                02 Abr
            </div>
            <div class="col-lg-1 col-md-1 semana1">
                <h4 class="tit-dia">Jue</h4>
                03 Abr
                <span class="horario"> 
                16:00
                16:30
                17:00
                17:30
                18:00
                18:30
                </span>
            </div>
            <div class="col-lg-1 col-md-1 semana">
                <h4 class="tit-dia">Vie</h4>
                04 Abr
                <span class="horario">             
                16:00
                16:30
                17:00
                17:30
                18:00
                18:30
                </span>
            </div>
            <div class="col-lg-1 col-md-1 semana1">
                <h4 class="tit-dia">Sáb</h4>
                05 Abr
                <span class="horario">             
                16:00
                16:30
                17:00
                17:30
                18:00
                18:30
                </span>
            </div>
            <div class="col-lg-1 col-md-1 semana">
                <h4 class="tit-dia">Dom</h4>
                06 Abr
            </div>
        <!--termina el calendario de fechas -->    
      </div><!-- terminan resultados-->     
      </div> <!-- termina contenedor de resultados-->           
    
	<?php include'bannerLateral.php' ;?>    
</div><!-- Contenedor principal-->

<?php include'footer.php' ;?>