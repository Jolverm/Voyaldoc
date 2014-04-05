<?php include'header.php' ;?>

<!-- Contenedor principal-->
<div class="container"> 
	<!-- Incluye banner-->
  <?php include'topBanner.php' ;?>
  <!-- Inician formularios de login-->
  <div class="col-lg-9 col-md-9 registro">
    <div class="col-lg-12 col-md-12">
      <div class="col-lg-8 col-md-8 busquedaTitulo">Búsqueda Avanzada<br>
        <p>(Elige uno o varios criterios de búsqueda)</p>
      </div>   
      <div class="col-lg-6 col-md-6 comoFuncionaRegistro">
        <!-- Inicia Video popUp Como funciona voy al doc -->
        <div class="modal fade" id="comoFunciona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <iframe width="560" height="315" src="//www.youtube.com/embed/T7CjS5_tHFg" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <!-- Video popUp Como funciona voy al doc -->
      </div>
    </div>
    
    <form role="form" class="formRegistro">
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
  </div><!-- Termina formularios de login-->

  <!-- inicia banner beneficios-->
<div class="col-lg-3 col-md-3 hidden-xs banner-lateral">
<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://ads.voyaldoc.net/adserver/www/delivery/ajs.php':'http://ads.voyaldoc.net/adserver/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=2");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://ads.voyaldoc.net/adserver/www/delivery/ck.php?n=afbd56f3&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://ads.voyaldoc.net/adserver/www/delivery/avw.php?zoneid=2&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=afbd56f3' border='0' alt='' /></a></noscript>
    </div>
    <!-- termina banner skyscrapper -->	</div>
	<!-- termina banner lateral --></div>  <!-- Terminan formularios de Resgistro-->
<?php include'bannerLlamada.php' ;?>

<?php include'bannerLlamada.php' ;?>

</div><!-- Contenedor principal-->

<?php include'footer.php' ;?>