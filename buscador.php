<!-- telefonos-->
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12 telefonos hidden-xs">
       <h4>Para agendar una cita llama al <b>6388 7799</b> (DF) o al <b>01800 638 7333</b> (del interior de la República)</h4>
     </div> 

   </div>
 </div> <!--Fin telefonos-->

   <!--BUSCADOR -->
     <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="img/logo.png" class="img-responsive" alt="Voy al Doc, Tu cita en un click">
        </div>
        <!--Inicia tabs-->
        <div class="col-lg-8 col-md-8 hidden-xs">
          <!--Menu tabs-->
          <ul class="nav nav-tabs buscador">
            <li class="active"><a href="#doctores">Doctores</a></li>
            <li><a href="#consultas">Consulta a domicilio</a></li>
            <li><a href="#ambulancias">Ambulancias</a></li>
          </ul><!--Fin Menu tabs-->
          <!-- contenedor Buscador-->
          <div id="buscador" class="tab-content">
            <!-- Tab Doctores-->
            <div class="tab-pane fade active in" id="doctores">
              <div class="row">
                <div class="texto-buscador">
                  BÚSQUEDA:
                </div>
              </div>
              <form class="form-inline" role="form">
                <div class="form-group col-lg-5 especialista">
                  <select class="form-control">
                    <option>Especialista</option>
                    <option value="74">Cardiólogo Hemodinamista</option>
                    <option value="87">Rehabilitación en Lenguaje y Audición</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group col-lg-4 estado">
                 <select class="form-control estado">
                  <option>Estado</option>
                  <option value="jalisco">Guadalajara y zona met.</option>
                  <option value="nuevo_leon">Monterrey y zona met.</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group col-lg-3 direccion">
                <input type="text" class="form-control" id="direccion" placeholder="Dirección">
              </div>
              <button type="submit" class="btn btn-default buscar">Buscar</button>
            </form>
            <div class="row">
              <div class="texto-buscador-link ">
                <a href="">Buscar por nombre de doctor</a>
              </div>
            </div>          
          </div><!--Fin Tab Doctor-->
          <!-- Tab Doctor a domicilio-->
          <div class="tab-pane fade" id="consultas">
            <div class="row">
              <div class="col-md-3 col-xs-4">
                <img src="img/doc-a-domicilio.png" alt="doctor a domicilio" class="img-responsive img-buscador">
              </div>
              <div class="col-md-8  doc-a-domicilio">Para hacer tu cita llámanos al: <a href="tel:+52556389099155">(55)6389-0991</a></div>
              <div class="col-md-3 doc-a-domicilio-terminos"><a href="">Términos y Condiciones</a></div>
              <div class="col-md-6 doc-a-domicilio-terminos">* Sólo aplica para DF y zona metropolitana</div>
            </div>
          </div><!--Fin Tab doctor a domicilio-->
          <!-- Tab Ambulancias-->
          <div class="tab-pane fade" id="ambulancias">
           <div class="row">
            <div class="col-md-3 col-xs-3">
              <img src="img/ambulancia.png" alt="Ambulancia" class="img-responsive img-buscador">
            </div>
            <div class="col-md-8 doc-a-domicilio">Para solicitar una ambulancia llámanos al: <a href="tel:+52556389099155">(55)6389-0991</a></div>
            <div class="col-md-3 doc-a-domicilio-terminos"><a href="">Términos y Condiciones</a></div>
            <div class="col-md-6 doc-a-domicilio-terminos">* Sólo aplica para DF y zona metropolitana</div>
          </div>
        </div><!--Fin Tab Ambulancias-->
      </div><!--Fin contenedor Buscador-->
    </div><!--termina tabs-->
  </div>
</div><!--FIN BUSCADOR -->