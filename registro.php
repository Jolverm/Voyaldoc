<?php include'header.php' ;?>

<!-- Contenedor principal-->
<div class="container"> 
	<!-- Incluye banner-->
  <?php include'topBanner.php' ;?>
  <!-- Inician formularios de login-->
  <div class="col-lg-9 col-md-9 registroPac">
    <div class="col-lg-12 col-md-12">
      <div class="col-lg-6 col-md-6 registroTituloPac">Crea tu cuenta
        <img src="img/FacebookRegistro.png" alt="Inicia sesión con Facebook">
        <span> o llena el formulario: </span>
      </div>
      <div class="col-lg-6 col-md-6 comoFuncionaRegistroPac">
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#comoFunciona">Como Funciona Voy al doc</button>
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
    
    <form role="form" class="formRegistroPac">
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
        </div>
        <div class="col-lg-6 col-md-6">
          <label >Apellidos</label>
          <input type="text" class="form-control" id="apellido" placeholder="Ingresa tus apellidos">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Contraseña</label>
          <input type="password" class="form-control" id="contraseña">
        </div>
        <div class="col-lg-6 col-md-6">
          <label >Repite tu contraseña</label>
          <input type="password" class="form-control" id="repassword">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">  
          <label >Correo Electrónico</label>
          <input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
        </div>
        <div class="col-lg-6 col-md-6">
          <label >Codígo Postal</label>
          <input type="text" class="form-control" id="cp" placeholder="C.P.">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6 fechaNacimiento">  
          <label >Fecha de nacimiento</label>      
          <div class="col-lg-3 col-md-4 dia">
            <select id="dia" class="form-control">
              <option>-</option>
              <option value="">-</option>
              <option value="01">1</option>
              <option value="02">2</option>
              <option value="03">3</option>
              <option value="04">4</option>
              <option value="05">5</option>
              <option value="06">6</option>
              <option value="07">7</option>
              <option value="08">8</option>
              <option value="09">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
            </select>
          </div>
          <div class="col-lg-5 col-md-5 mes">
            <select id="mes" class="form-control">
              <option>-</option>
              <option value="01">Enero</option>
              <option value="02">Febrero</option>
              <option value="03">Marzo</option>
              <option value="04">Abril</option>
              <option value="05">Mayo</option>
              <option value="06">Junio</option>
              <option value="07">Julio</option>
              <option value="08">Agosto</option>
              <option value="09">Septiembre</option>
              <option value="10">Octubre</option>
              <option value="11">Noviembre</option>
              <option value="12">Diciembre</option>
            </select>
          </div>
          <div class="col-lg-4 col-md-3 anio">
            <select id="anio" class="form-control">
              <option>-</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
              <option value="1969">1969</option>
              <option value="1968">1968</option>
              <option value="1967">1967</option>
              <option value="1966">1966</option>
              <option value="1965">1965</option>
              <option value="1964">1964</option>
              <option value="1963">1963</option>
              <option value="1962">1962</option>
              <option value="1961">1961</option>
              <option value="1960">1960</option>
              <option value="1959">1959</option>
              <option value="1958">1958</option>
              <option value="1957">1957</option>
              <option value="1956">1956</option>
              <option value="1955">1955</option>
              <option value="1954">1954</option>
              <option value="1953">1953</option>
              <option value="1952">1952</option>
              <option value="1951">1951</option>
              <option value="1950">1950</option>
              <option value="1949">1949</option>
              <option value="1948">1948</option>
              <option value="1947">1947</option>
              <option value="1946">1946</option>
              <option value="1945">1945</option>
              <option value="1944">1944</option>
              <option value="1943">1943</option>
              <option value="1942">1942</option>
              <option value="1941">1941</option>
              <option value="1940">1940</option>
              <option value="1939">1939</option>
              <option value="1938">1938</option>
              <option value="1937">1937</option>
              <option value="1936">1936</option>
              <option value="1935">1935</option>
              <option value="1934">1934</option>
              <option value="1933">1933</option>
              <option value="1932">1932</option>
              <option value="1931">1931</option>
              <option value="1930">1930</option>
              <option value="1929">1929</option>
              <option value="1928">1928</option>
              <option value="1927">1927</option>
              <option value="1926">1926</option>
              <option value="1925">1925</option>
              <option value="1924">1924</option>
              <option value="1923">1923</option>
              <option value="1922">1922</option>
              <option value="1921">1921</option>
              <option value="1920">1920</option>
              <option value="1919">1919</option>
              <option value="1918">1918</option>
              <option value="1917">1917</option>
              <option value="1916">1916</option>
              <option value="1915">1915</option>
              <option value="1914">1914</option>
            </select>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <label>Código de promoción </label>
          <input type="text" class="form-control" id="promocion" placeholder="Código de promoción">
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
  	<div class="col-lg-8 col-md-8 beneficios">
      <div class="-col-lg-6 tituloBeneficios">
        Beneficios
      </div>
      <div class="-col-lg-6 col-md-12 descBeneficios">
        Voy al Doc te ofrece muchos beneficios:
      </div>
      <div class="-col-lg-6 col-md-12">
       <ul>
        <li>Busca y encuentra al doctor ideal para ti cerca de tu casa o trabajo</li>
        <li>Haz tus citas por internet, por teléfono, a través del App o por chat </li>
        <li>Lee las encuestas de satisfacción de otros pacientes </li>
        <li>Infórmate sobre temas de salud</li>
        <li>Recibe ayuda para emergencias médicas</li>
      </ul>
    </div>
    
  </div>
</div>  <!-- Terminan formularios de Resgistro-->
<?php include'bannerLlamada.php' ;?>

</div><!-- Contenedor principal-->

<?php include'footer.php' ;?>