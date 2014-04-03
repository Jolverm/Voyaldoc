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

              
            <div class="row">
				<div class="form-group col-lg-5 filtrar">
                  <select class="form-control">
                    <option>Filtrar por:</option>
                    <option value="74">Cardiólogo Hemodinamista</option>
                    <option value="87">Rehabilitación en Lenguaje y Audición</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group col-lg-4 costo">
                 <select class="form-control">
                  <option>Costo</option>
                  <option value="jalisco">Guadalajara y zona met.</option>
                  <option value="nuevo_leon">Monterrey y zona met.</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group col-lg-3 nombre">   
                <input type="text" class="form-control" id="direccion" placeholder="Nombre(s), Apellido(s)">
              </div>
              <button type="submit" class="btn btn-default buscar">Buscar</button>
              
              </div> <!-- Cierra segundo filtro de busqueda -->
            </form>          
            </div>
            
          </div><!--Fin Tab Doctor-->
          <!-- Tab Doctor a domicilio-->
      </div><!--Fin contenedor Buscador-->
    </div><!--termina tabs-->
  </div><!--FIN BUSCADOR -->
