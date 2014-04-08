<?php include'header.php' ;?>

<!-- Contenedor principal-->
<div class="container"> 
  <!-- Incluye banner-->
  <?php include'topBanner.php' ;?>
  <!-- Inician formularios de login-->
  <div class="col-lg-9 col-md-9 registroDr">
    <div class="col-lg-12 col-md-12">
      <div class="col-lg-6 col-md-6 registroTituloDr">Registro de Doctor</div>
      <div class="col-lg-6 col-md-6 comoFuncionaRegistroDr">
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#comoFunciona">Como Funciona Voy al doc</button>
        <!-- Inicia Video popUp Como funciona voy al doc -->
        <div class="modal fade" id="comoFunciona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <iframe width="560" height="315" src="//www.youtube.com/embed/RfcYYj-CsSk" frameborder="0" allowfullscreen></iframe>                
              </div>
            </div>
          </div>
        </div>
        <!-- Video popUp Como funciona voy al doc -->
      </div>
    </div>
    
    <form role="form" class="formRegistroDr">
      <div class="form-group">
        <div class="col-lg-6 col-md-6 prefijo">  
          <label >Prefijo</label> 
          <select id="prefijo" class="form-control">
              <option>Dr.</option>
              <option>Dra.</option>
              <option>Lic.</option>
            </select>
        </div>
        <div class="col-lg-6 col-md-6">
          <label >Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Apellido Paterno</label>
          <input type="text" class="form-control" id="apellidoPat" placeholder="Ingresa tu apellido Paterno">
        </div>
        <div class="col-lg-6 col-md-6">
          <label >Apellido Materno</label>
          <input type="text" class="form-control" id="apellidoMat" placeholder="Ingresa tu apellido Materno">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Correo Electrónico</label>
          <input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
        </div>
        <div class="col-lg-6 col-md-6 foto">
          <label >Foto: (Tipo .JPG max 1MB)</label>
          <input type="file" id="foto">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Estado</label>      
          <select id="estado" class="form-control">
            <option value="distrito_federal" selected="selected">Distrito Federal</option>
            <option value="estado_de_mexico">Estado de México</option>
            <option value="jalisco">Guadalajara</option>
            <option value="guanajuato">León</option>
            <option value="michoacan">Morelia</option>
            <option value="nuevo_leon">Monterrey</option>
            <option value="puebla">Puebla</option>
            <option value="queretaro">Querétaro</option>
            <option value="baja_california">Tijuana</option>
          </select>
        </div>
        <div class="col-lg-6 col-md-6">
          <label>Código de Promoción</label>
          <input type="text" class="form-control" id="promocion" placeholder="Código de Promoción">
        </div>
      </div>
        <div class="form-group">
        <div class="col-lg-6 col-md-6 telRegistroDr">  
          <label>Teléfono</label>
          <div class="col-lg-6 col-md-6">
          <input type="text" class="form-control" id="ladaFijo" placeholder="Lada">
        </div>
        <div class="col-lg-6 col-md-6">
          <input type="text" class="form-control" id="numeroFijo" placeholder="Número">
        </div>
        </div>
        <div class="col-lg-6 col-md-6 telRegistroDr">
          <label>Celular</label>
          <div class="col-lg-6 col-md-6">
          <input type="text" class="form-control" id="ladaCelular" placeholder="Lada">
        </div>
        <div class="col-lg-6 col-md-6">
          <input type="text" class="form-control" id="numeroCelular" placeholder="Número">
        </div>
        </div>
      </div>
        <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Especialidad(es)</label>      
          <select id="estado" class=" form-control chosen-select especialidadRegistro" multiple>
            <option value="distrito_federal" selected="selected">Distrito Federal</option>
            <option value="estado_de_mexico">Estado de México</option>
            <option value="jalisco">Guadalajara</option>
            <option value="guanajuato">León</option>
            <option value="michoacan">Morelia</option>
            <option value="nuevo_leon">Monterrey</option>
            <option value="puebla">Puebla</option>
            <option value="queretaro">Querétaro</option>
            <option value="baja_california">Tijuana</option>
          </select>
        </div>
        <div class="col-lg-6 col-md-6">
          <label>Otra Especialidad:</label>
          <input type="text" class="form-control" id="promocion" placeholder="Otra, no está en la lista">
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="checkbox privacidadTerminos">
          <label>
            <input type="checkbox">
          </label> Leí y acepto el <a href="privacidad.php">aviso de privacidad</a> y los <a href="terminos-y-condiciones.php">términos y condiciones.</a>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-default registrarme">Registrarme</button>
      </div>
    </form>
  </div><!-- Termina formularios de login-->

  <!-- inicia banner beneficios-->
  <div class="col-lg-3 col-md-3 ">
    <div class="col-lg-8 col-md-8 beneficiosDr">
      <div class="-col-lg-6 tituloBeneficiosDr">
        Beneficios
      </div>
      <div class="-col-lg-6 col-md-12 descBeneficiosDr">
        Voy al Doc te ofrece muchos beneficios:
      </div>
      <div class="-col-lg-6 col-md-12">
       <ul>
          <li>Darse a conocer entre nuevos pacientes</li>
          <li>Oportunidad de llenar espacios disponibles en la agenda</li>
          <li>Reducir cancelaciones e inasistencias</li>
          <li>Dedicar menos tiempo a llamadas para agendar citas y recordatorios</li>
          <li>Leer las encuestas de satisfacción de tus pacientes</li>
          <li>Invertir en publicidad a través de un medio con mayor impacto</li>
          <li>Aumentar satisfacción de los pacientes</li>
          <li>Aumentar eficiencia de asistentes gracias al apoyo de una herramienta que les permitirá una mejor gestión de citas</li>
        </ul>
    </div>
    
  </div>
</div>  <!-- Terminan formularios de Resgistro-->
<?php include'bannerLlamada.php' ;?>

</div><!-- Contenedor principal-->

<?php include'footer.php' ;?>