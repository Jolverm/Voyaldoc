<?php include'header.php' ;?>
<!-- Contenedor principal-->
<div class="container"> 
<?php include'topBanner.php'; ?>

<ul class="nav nav-tabs menu-perfil"><!--inicia menu Perfil Usuario -->
  <li class="active"><a href="#calendario">Mi Calendario</a></li>
  <li><a href="#cuenta">Mi Cuenta / Contraseña</a></li>
</ul><!--Termina menu Perfil Usuario -->
<div class="borderArt"></div> 
  
  <!--inicia menu Perfil Usuario -->
  <div class="tab-content perfil">
    <!-- inicia pestaña Mi calendario -->
	<div class="tab-pane fade active in" id="calendario">
    <h1 class="tit-perfil">Tolas las Citas</h1>
    <div class="boton-azul"><a href="#" class="boton">Exportar Citas</a></div>

    <div class="row">
        <div class="calendario">
        </div>
    </div>
    </div>
      <!-- termina pestaña Mi calendario -->
    <div class="tab-pane fade" id="cuenta">
      <!-- inicia pestaña Mi cuenta -->
        <div class="col-lg-9 col-md-9 cuenta">
        	<h3 class="tit-cuenta">Mi cunta / Cambio de contraseña</h3>
            <ul class="datos">
            	<li>E-mail: <span class="info-datos">alex.gaza@hotmail.com</span></li>
                <li>Nombre: <span class="info-datos">Alejandro García</span></li>
                <li>Código Postal: <span class="info-datos">04300</span></li>
                <li>Fecha de Nacimiento: <span class="info-datos">01/08/87</span></li>
            </ul>
            <div class="row">
                <div class="col-lg-1 col-md-1">
                	<div class="btn-perfil"><a href="#" class="boton-verde">Editar</a></div>
                </div>
                <div class="col-lg-3 col-md-3 enmedio">    
                	<div class="btn-perfil"><a href="#" class="boton-naranja">Cambiar Contraseña</a></div>
                </div>
                <div class="col-lg-2 col-md-2 final">
                	<div class="btn-perfil"><a href="#" class="boton">Cerrar Sesión</a></div>
                </div>
            </div>
        </div>
		<!-- termina pestaña Mi cuenta -->

        <!-- banner lateral -->
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
	<!-- termina banner lateral -->

        <!-- termina banner lateral -->
  </div>

</div><!-- Cierra contenido Perfil -->

</div><!-- Contenedor principal-->
 
<?php include'footer.php' ;?>
<script>
  $('.menu-perfil a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  })
  </script>