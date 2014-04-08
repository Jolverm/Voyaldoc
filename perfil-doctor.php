<?php include'header.php' ;?>
<!-- Contenedor principal-->
<div class="container"> 

  <?php include'topBanner.php';?>

<!--inicia menu Perfil Doctor -->
  <ul class="nav nav-tabs menu-perfil">
    <li class="active"><a href="#calendario">Mi Calendario</a></li>
    <li><a href="#datosContactoDr">Datos de contacto</a></li>
    <li><a href="#consultorios">Consultorios</a></li>
    <li><a href="#cuenta">Mi Cuenta / Contraseña</a></li>
  </ul><!--Termina menu Perfil Doctor -->
  <div class="borderArt"></div>  
  <div class="tab-content perfil">
    <!-- inicia pestaña Mi calendario -->
    <div class="tab-pane fade active in" id="calendario">
      <h1 class="tit-perfil">Tolas las Citas</h1>
      <div class="boton-azul"><a href="#" class="boton">Exportar Citas</a></div>
      <div class="row">
        <div class="calendario">
          Aqui va Google calendars
        </div>
      </div>
    </div>
    <!-- termina pestaña Mi calendario -->

    <!-- inicia pestaña Datos de Contacto -->
    <div class="tab-pane fade" id="datosContactoDr">    
      <div class="col-lg-9 col-md-9 cuenta">
       <h3 class="tit-cuenta">Datos de contacto</h3>
       <form role="form" class="formDatosContactoDr">
        <div class="col-lg-6 col-md-6">
         <label for="prefijo">Prefijo</label>
         <select id="prefijo" name="prefijo" class="form-control">
           <option value="">Selecciona una Opción</option>
           <option value="Dr.">Dr.</option>
           <option value="Dra.">Dra.</option>
           <option value="Lic.">Lic.</option>
         </select>
       </div>    
       <div class="col-lg-6 col-md-6">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
      </div>
      <div class="col-lg-6 col-md-6">
        <label for="apaterno">Apellido Paterno:</label>
        <input type="text" class="form-control" name="apaterno" id="apaterno">
      </div>
      <div class="col-lg-6 col-md-6">
        <label for="amaterno">Apellido Materno:</label>
        <input type="text" class="form-control" name="amaterno" id="amaterno">
      </div>
      <div class="col-lg-6 col-md-6">
        <label for="mail">Email:</label>
        <input type="text" class="form-control" name="mail" id="mail">
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="col-lg-3 col-md-3">
          <label for="ladaTel">Lada:</label>
          <input type="text" class="form-control" name="ladaTel" id="ladaTel">
        </div>                
        <div class="col-lg-9 col-md-9">
          <label for="telefono">Teléfono:</label>
          <input type="text" class="form-control" name="telefono" id="telefono">
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="col-lg-3 col-md-3">            
          <label for="ladaCel">Lada:</label>
          <input type="text" class="form-control" name="ladaCel" id="ladaCel">
        </div>
        <div class="col-lg-9 col-md-9">                
          <label for="movil">Celular:</label>
          <input type="text" class="form-control" name="movil" id="movil">                
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <label for="estado">Estado:</label>
        <select class="form-control" name="estado" id="estado">
         <option value="">Selecciona una Opción</option>
         <option value="Aguascalientes">Aguascalientes</option>
         <option value="Baja California">Baja California</option>
         <option value="Baja California Sur">Baja California Sur</option>
         <option value="Campeche">Campeche</option>
         <option value="Chiapas">Chiapas</option>
         <option value="Chihuahua">Chihuahua</option>
         <option value="Coahuila">Coahuila</option>
         <option value="Colima">Colima</option>
         <option value="Distrito Federal">Distrito Federal</option>                    
         <option value="Durango">Durango</option>
         <option value="Guanajuato">Guanajuato</option>
         <option value="Guerrero">Guerrero</option>
         <option value="Hidalgo">Hidalgo</option>
         <option value="Jalisco">Jalisco</option>
         <option value="Estado de México">Estado de México</option>
         <option value="Michoacán">Michoacán</option>
         <option value="Morelos">Morelos</option>
         <option value="Nayarit">Nayarit</option>
         <option value="Nuevo León">Nuevo León</option>
         <option value="Oaxaca">Oaxaca</option>
         <option value="Puebla">Puebla</option>
         <option value="Querétaro">Querétaro</option>
         <option value="Quintana Roo">Quintana Roo</option>
         <option value="San Luis Potosí">San Luis Potosí</option>
         <option value="Sinaloa">Sinaloa</option>
         <option value="Sonora">Sonora</option>
         <option value="Tabasco">Tabasco</option>
         <option value="Tamaulipas">Tamaulipas</option>
         <option value="Tlaxcala">Tlaxcala</option>
         <option value="Veracruz">Veracruz</option>
         <option value="Yucatán">Yucatán</option>
         <option value="Zacatecas">Zacatecas</option>
       </select>
     </div>
     <div class="form-group">
       <div class="col-lg-6 col-md-6">
         <label for="especialidad">Especialidad:</label>
         <select class="form-control" id="especialidad" name="especialidad">
           <option value="">Selecciona la Especialidad</option>
           <option value="8">Médico General</option>
           <option value="1">Cardiólogo</option>
           <option value="2">Dentista</option>
           <option value="3">Dermatólogo</option>
           <option value="9">Nutriólogo</option>
           <option value="10">Oftalmólogo</option>
           <option value="12">Otorrinolaringólogo</option>
           <option value="13">Pediatra</option>
           <option value="14">Psicólogo</option>
           <option value="15">Psiquiatra</option>
           <option value="17">Urólogo</option>
           <option value="18">Cirujano General</option>
           <option value="19">Cirujano Plástico</option>
           <option value="20">Cirujano Oncólogo</option>
           <option value="24">Ginecólogo y Obstetra</option>
           <option value="25">Bariatra</option>
           <option value="26">Ortodoncista</option>
           <option value="27">Odontopediatra</option>
           <option value="28">Endodoncista</option>
           <option value="30">Hematólogo</option>
           <option value="31">Neurocirujano</option>
           <option value="32">Reumatólogo</option>
           <option value="33">Foniatra</option>
           <option value="34">Radiólogo</option>
           <option value="35">Gastroenterólogo</option>
           <option value="36">Neumólogo</option>
           <option value="37">Endocrinólogo</option>
           <option value="38">Internista</option>
           <option value="40">Oncólogo</option>
           <option value="41">Infectólogo</option>
           <option value="42">Maxilofacial</option>
           <option value="43">Periodoncista</option>
           <option value="45">Prostodoncista</option>
           <option value="46">Fisioterapeuta</option>
           <option value="47">Neurólogo</option>
           <option value="48">Geriatra</option>
           <option value="49">Nefrólogo</option>
           <option value="50">Genetista</option>
           <option value="51">Homeópata</option>
           <option value="52">Quiropráctico</option>
           <option value="53">Cirujano Pediatra</option>
           <option value="54">Hematólogo Pediatra</option>
           <option value="55">Ortopedista Pediatra</option>
           <option value="56">Otorrinolaringólogo Pediatra</option>
           <option value="58">Algólogo</option>
           <option value="59">Médico de Rehabilitación</option>
           <option value="60">Médico Estético</option>
           <option value="61">Coloproctólogo</option>
           <option value="62">Neonatólogo</option>
           <option value="63">Optometrista</option>
           <option value="64">Cardiólogo Pediatra</option>
           <option value="65">Anestesiólogo</option>
           <option value="66">Médico Intensivista</option>
           <option value="67">Médico Deportivo</option>
           <option value="68">Inmunólogo</option>
           <option value="69">Alergólogo</option>
           <option value="70">Médico en Biología de la Reproducción</option>
           <option value="71">Angiólogo</option>
           <option value="72">Ortopedista y Traumatólogo</option>
           <option value="73">Neumólogo Pediatra</option>
           <option value="74">Cardiólogo Hemodinamista</option>
           <option value="76">Urgencias Médico Quirúrgicas</option>
           <option value="77">Medicina del Trabajo</option>
           <option value="78">Dermatólogo Pediatra</option>
           <option value="79">Urólogo Pediatra</option>
           <option value="80">Patólogo Bucal</option>
           <option value="81">Endoperiodontólogo</option>
           <option value="82">Podiatra</option>
           <option value="83">Neuroradiólogo</option>
           <option value="84">Nefrólogo (Hemodiálisis)</option>
           <option value="85">Cirujano Vascular</option>
           <option value="86">Acupunturista</option>
           <option value="87">Rehabilitación en Lenguaje y Audición</option>
           <option value="88">Cirujano Gastroenterólogo</option>
           <option value="89">Gastroenterólogo Pediatra</option>
           <option value="90">Infectólogo Pediatra</option>
           <option value="91">Adicciónes</option>
           <option value="92">Oftalmólogo Pediatra</option>
           <option value="93">Oncólogo Pediatra</option>
           <option value="94">Dermocosmeatra</option>
           <option value="95">Audiología</option>
           <option value="96">Médico Cirujano Partero</option>
         </select>
       </div>
       <div class="col-lg-6 col-md-6">
        <label for="institucion">Institución:</label>
        <input class="form-control" type="text" name="institucion" id="institucion">                     
      </div>
      <div class="col-lg-6 col-md-6">
       <div class="col-lg-4 col-md-4">
         <label for="anio">Año:</label>
         <select class="form-control" name="anio" id="anio">
           <option value="2014">2014</option>
           <option value="2013">2013</option>
           <option value="2012">2012</option>
           <option value="2011">2011</option>
           <option value="2010">2010</option>
           <option value="2009">2009</option>
           <option value="2008">2008</option>
           <option value="2007">2007</option>
           <option value="2006">2006</option>
           <option value="2005">2005</option>
           <option value="2004">2004</option>
           <option value="2003">2003</option>
           <option value="2002">2002</option>
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
         </select>
       </div>
       <div class="col-lg-8 col-md-8">
         <label for="cedula">Cedula</label>
         <input type="text" class="form-control" name="cedula" id="cedula">
       </div>
     </div>
     <div class="col-lg-6 col-md-6">  
      <div class="col-lg-6 col-md-6">
       <input type="button" class="btn btn-warning eliminarEsp" name="eliminarEsp" id="eliminarEsp" value="Eliminar Especialidad">
       </div>
       <div class="col-lg-6 col-md-6">
       <input type="button" class="btn btn-success agregarEsp" name="agregarEsp" id="agregarEsp" value="Agregar Especialidad">
      </div>

     </div>
   </div><!-- cierra seccion especialidad -->

   <div class="col-lg-12 col-md-12">
     <label for="subespecialidades">Subespecialidades</label><br>
     <span class="ejemplo">Ej. "Vítreo y retina", "Glaucoma"</span><br>
     <input type="button" class="btn btn-success" name="agregarSubEsp" id="agregarSubEsp" value="Agregar Subespecialidad">
   </div>
   <div class="col-lg-8 col-md-8">    
     <label for="academias">Academias, Sociedades, Colegios</label><br>
     <span class="ejemplo">Ej. "Academia de Medicina", "Sociedad Mexicana de Oftalmología", "Asociación Panamericana de Oftalmología", "Colegio Mexicano de Glaucoma"</span><br>
     <input type="text" class="form-control" name="academias" id="academias">
     <input type="button" class="btn btn-success" name="addAcademia" id="addAcademia" value="Agregar Academia">
   </div>
   <div class="col-lg-8 col-md-8">
     <label for="reconocimientos">Reconocimientos y Publicaciones</label><br>
     <span class="ejemplo">Ej. "Oftalmología: "Avances en Retinopatía Diabética", Revista Mexicana de Oftalmología, Marzo 2011"</span><br>
     <input type="button" class="btn btn-success" name="reconocimientos" id="reconocimientos" value="+Agregar más">
   </div>
   <div class="col-lg-8 col-md-8">
     <label for="experienciaDestacada">Experiencia Destacada</label><br>
     <span class="ejemplo">Ej. "Especialista en cirugía de retina y vítreo (más de 2000 cirugías realizadas a la fecha)"</span><br>
     <input type="text" class="form-control" name="experienciaDestacada" id="experienciaDestacada">
     <input type="button" class="btn btn-success" name="addExperiencia" id="addExperiencia" value="+Agregar mas">
   </div>
   <div class="col-lg-8 col-md-8">
     <label for="certificados">Certificados de consejos médicos</label>
     <input type="text" class="form-control" name="certificados" id="certificados">
     <input type="button" class="btn btn-success" name="addCertificados" id="addCertificados" value="+Agregar mas" >
   </div>
   <div class="col-lg-6 col-md-6">
    <label for="imagen">Imagen:</label>
    <input type="file" class="btn" name="imagen" id="imagen" value="Examinar">
  </div>
  <!-- Inicia check aseguradoras -->
  <div class="row">
   <div class="col-lg-12 col-md-12">
     <label for="imagen">Aseguradoras con las que trabaja:</label><br>
     <span class="ejemplo">Por favor selecciona todas las que apliquen. Si no perteneces a ninguna red, no selecciones ninguna.</span>
   </div>
   <div class="col-lg-12 col-md-12 seguros">
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora1" value="1" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> ACE</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora2" value="2" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Alico</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora3" value="3" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Allianz de México</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora4" value="4" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Axa Seguros</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora5" value="5" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Bupa</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora6" value="6" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Bupa México</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora7" value="7" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Chartis AIG</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora8" value="8" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Dentegra</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora9" value="9" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> General de Salud</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora10" value="10" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> General de Seguros</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora11" value="11" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Grupo Nacional Provincial</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora12" value="12" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> International Health Insurance</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora13" value="13" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> La Latinoamericana</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora14" value="14" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Mapfre Tepeyac</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora16" value="16" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Médica Integral</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora17" value="17" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Metlife México</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora18" value="18" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Metropolitana de Seguros</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora19" value="19" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Monterrey New York Life</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora20" value="20" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Plan Seguro</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora21" value="21" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Preventis</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora22" value="22" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Red Médica Internacional</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora23" value="23" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Royal &amp; Sun</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora24" value="24" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Santander Serfin</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora25" value="25" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Atlas</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora26" value="26" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Azteca</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora27" value="27" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Banamex</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora28" value="28" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Bancomer</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora29" value="29" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Banorte Generalli</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora30" value="30" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Centauro</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora31" value="31" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Inbursa</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora32" value="32" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Interacciones</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora34" value="34" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Monterrey</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora35" value="35" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Multiva</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora36" value="36" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Santander</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora37" value="37" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Servicios Integrales de Salud Nova</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora38" value="38" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Sinergia Médica</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora39" value="39" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> USA Medical Services</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora40" value="40" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Vitamedica </span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora41" value="41" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Zurich Vida </span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora42" value="42" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> VRIM membresía</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora43" value="43" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Scotiabank</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora45" value="45" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Alfa Uno</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora46" value="46" name="data[Aseguradora][Aseguradora][]"> <span class="letra">Human Access</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora47" value="47" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Telemedic</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora48" value="48" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Ikke Asistencia</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora49" value="49" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Medicall Home</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora50" value="50" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Human Access</span></div>
    <div class="col-lg-4 col-md-6"><input type="checkbox" id="AseguradoraAseguradora51" value="51" name="data[Aseguradora][Aseguradora][]"> <span class="letra"> Mediacces</span></div>
  </div>
</div><!-- Termina check aseguradoras  -->
<input type="submit" class="btn btn-default" name="enviar" id="enviar" value="Enviar">
</form>
</div> 
<?php include'bannerlateral.php';?>
</div><!-- termina seccion Datos de contacto -->


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
</div><!-- termina pestaña Mi cuenta-->

<!-- inicia seccion Consultorios -->
<div class="tab-pane fade" id="consultorios">
  <div class="col-lg-9 col-md-9 consultorios">
   <h3 class="tit-cuenta">Consultorios</h3>
   <ul class="datos">
     <li>Consultorio 1</li>
   </ul>
   <div class="row">
    <div class="col-lg-3 col-md-3">    
     <a class="btn btn-warning" href="#" role="button">Agregar Consultorio</a>
   </div>
 </div>
</div>
<?php include'bannerlateral.php';?>
</div><!-- termina seccion Consultorios -->

</div><!-- termina contenedor tabs Perfil Doctor -->

</div><!-- Contenedor principal-->

<?php include'footer.php' ;?>
