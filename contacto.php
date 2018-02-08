<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dr. Arturo Flores | Contacto</title>
  <link rel="icon" type="image/png" href="assets/images/logos/isotipo.png">
  <!-- [#TODO] Dont forget to update the FAVICON IMAGES in the next route -->
  <!-- <link rel="icon" type="image/png" href="assets/images/favicon-180x180.png" sizes="128x128"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link href="./assets/styles/main.css" rel="stylesheet">
</head>

<body>
  <!--  Header  -->
  <div class="header-container">
    <header class="main-nav">
      <a href="">
        <img src="assets/images/logos/isotipo.png" class="logo-header" alt="">
      </a>
      <nav role="navigation">
        <ul>
          <a href="/">
            <li>
              INICIO
            </li>
          </a>
          <a href="trayectoria">
            <li>
              TRAYECTORIA
            </li>
          </a>
          <a href="servicios">
            <li>
              SERVICIOS
            </li>
          </a>
          <li class="sub-menu-content">
              ENFERMEDADES
              <ul class="ul-sub-menu">
                <li><a href="#">Marcapaso</a></li>
                <li><a href="#">Cardidesfibrilador</a></li>
                <li><a href="#">Resincronizador cardiaco</a></li>
                <li><a href="#">Estudio Electrorisiológico</a></li>
                <li><a href="#">Arritmias</a></li>
                <li><a href="#">Infarto</a></li>
                <li><a href="#">Hipertensión arterial</a></li>
                <li><a href="#">Insuficiencia cardiaca</a></li>
              </ul>
          </li>
          <a href="contacto">
            <li class="active-nav">
              CONTACTO
            </li>
          </a>
        </ul>
      </nav>
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>
  </div>
  <!--  Aviso  -->
  <div class="aviso-general">
     <div class="aviso-content">
        <div class="llamanosTxt"> 
           <img src="assets/images/aviso/alert.svg" class="alertIcon" alt="">
           <p>PARA EMERGENCIAS LLÁMENOS AL (33) 1242 7651</p>
        </div>
        <img src="assets/images/aviso/x.svg" class="closeIcon" alt="">
     </div>
  </div>

  <!--  Main content -->
  <main class="j-workspace ">
    <div class="j-wrap">
      <h2 class="blue-title contacto-title">CONTACTO</h2>
    </div>
     <section class="j-wrap-80">
      <div class="contacto">
          <form class="contacto-form" id="contact-form" action="#" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-container">
                <div class="form-card">
                    <label for="inputNombre">Nombre *</label>
                    <input type="text" name="nombre" id="inputNombre">
                </div>
                <div class="form-card">
                    <label for="inputApellidos">Apellidos *</label>
                    <input type="text" name="apellidos" id="inputApellidos">
                </div>
            </div>
            <div class="form-container">
                <div class="form-card">
                    <label for="inputEmail">Correo Electrónico *</label>
                    <input type="email" name="email" id="inputEmail">
                </div>
                <div class="form-card">
                    <label for="inputFecha">Fecha de nacimiento</label>
                    <input type="text" name="fecha" id="inputFecha" onfocus="(this.type='date')" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" min="1930-01-01" max="2010-12-31" style="padding-left: 8px;">
                </div>
            </div>
            <div class="form-container">
                <div class="form-card">
                    <label for="selectPais">País</label>
                    <select name="pais" id="selectPais">
                        <option value="Elegir opción" id="EO">Elegir opción</option>
                        <option value="Argentina" id="AR">Argentina</option>
                        <option value="Belice" id="BZ">Belice</option>
                        <option value="Bolivia" id="BO">Bolivia</option>
                        <option value="Brasil" id="BR">Brasil</option>
                        <option value="Canadá" id="CA">Canadá</option>
                        <option value="Chile" id="CL">Chile</option>
                        <option value="Colombia" id="CO">Colombia</option>
                        <option value="Costa Rica" id="CR">Costa Rica</option>
                        <option value="Ecuador" id="EC">Ecuador</option>
                        <option value="El Salvador" id="SV">El Salvador</option>
                        <option value="Estados Unidos" id="US">Estados Unidos</option>
                        <option value="Guatemala" id="GT">Guatemala</option>
                        <option value="Guyana" id="GY">Guyana</option>
                        <option value="Honduras" id="HN">Honduras</option>
                        <option value="México" id="MX">México</option>          
                        <option value="Nicaragua" id="NI">Nicaragua</option>                      
                        <option value="Panamá" id="PA">Panamá</option>                       
                        <option value="Paraguay" id="PY">Paraguay</option>
                        <option value="Perú" id="PE">Perú</option>
                        <option value="Surinam" id="SN">Surinam</option>
                        <option value="Uruguay" id="UY">Uruguay</option>
                        <option value="Venezuela" id="VE">Venezuela</option>
                        <option value="Otro" id="otroPais">Otro</option>
                    </select>
                </div>
                <div class="form-card">
                    <label for="selectEstado">Estado</label>
                    <input type="text" name="estado" id="selectEstado">
                    <!--<select name="Estados" id="selectEstado">
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California ">Baja California </option>
                        <option value="Baja California Sur ">Baja California Sur </option>
                        <option value="Campeche ">Campeche </option>
                        <option value="Chiapas ">Chiapas </option>
                        <option value="Chihuahua ">Chihuahua </option>
                        <option value="Coahuila ">Coahuila </option>
                        <option value="Colima ">Colima </option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Durango ">Durango </option>
                        <option value="Estado de México ">Estado de México </option>
                        <option value="Guanajuato ">Guanajuato </option>
                        <option value="Guerrero ">Guerrero </option>
                        <option value="Hidalgo ">Hidalgo </option>
                        <option value="Jalisco ">Jalisco </option>
                        <option value="Michoacán ">Michoacán </option>
                        <option value="Morelos ">Morelos </option>
                        <option value="Nayarit ">Nayarit </option>
                        <option value="Nuevo León ">Nuevo León </option>
                        <option value="Oaxaca ">Oaxaca </option>
                        <option value="Puebla ">Puebla </option>
                        <option value="Querétaro ">Querétaro </option>
                        <option value="Quintana Roo ">Quintana Roo </option>
                        <option value="San Luis Potosí ">San Luis Potosí </option>
                        <option value="Sinaloa ">Sinaloa </option>
                        <option value="Sonora ">Sonora </option>
                        <option value="Tabasco ">Tabasco </option>
                        <option value="Tamaulipas ">Tamaulipas </option>
                        <option value="Tlaxcala ">Tlaxcala </option>
                        <option value="Veracruz ">Veracruz </option>
                        <option value="Yucatán ">Yucatán </option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>-->
                </div>
            </div>
            <div class="form-container-2">
                <label for="inputAsunto">Asunto *</label>
                <select name="asunto" id="selectAsunto">
                    <option value="Elije una opción" id="euo">Elije una opción</option>
                    <option value="Deseos agendar una consulta" id="dauc">Deseos agendar una consulta.</option>
                    <option value="Deseo pedir informes" id="dpi">Deseo pedir informes.</option>
                    <option value="Otro" id="otro">Otro</option>
                </select>
            </div>
            <div class="form-container-2">
                <label for="taMensaje">Mensaje *</label>
                <textarea name="mensaje" id="taMensaje" placeholder=""></textarea>
            </div>
            <button type="submit" class="ripple">ENVIAR</button>
            <div class="nota"><span>Los campos marcados con * son obligatorios</span></div>
          </form>
      </div>
     </section>       
  </main>
  <footer>
     <div class="ft-section-up">
        <img src="assets/images/footer/Logotipo.png" alt="">
        <div class="footer-list ft-l-1 list-1">
           <h3>TRAYECTORIA</h3>
           <a href="#">Biografía</a>
           <a href="#">Labor</a>
        </div>
        <div class="footer-list list-2">
           <h3>SERVICIOS</h3>
           <a href="#">Consultas</a>
           <a href="#">Enfermedades</a>
           <a href="#">Dispositivos</a>
        </div>
        <div class="footer-list-2 list-3">
           <h3>ENFERMEDADES</h3>
           <a href="#">Marcapaso</a>
           <a href="#">Cardidesfibrilador</a>
           <a href="#">Resincronizador</a>
           <a href="#">Estudio Electrorisiologico</a>
           <a href="#">Arritmias</a>
        </div>
        <div class="footer-list list-4">
           <h3>CASOS DE ÉXITO</h3>
           <a href="#">Lorem Ipsum</a>
           <a href="#">Lorem Ipsum</a>
           <a href="#">Lorem Ipsum</a>
           <a href="#">Lorem Ipsum</a>
        </div>
     </div>
     <div class="ft-section-down">
        <div class="ft-inner">
           <div class="ft-title-content">
              <p>CARDIÓLOGO&nbsp;&nbsp;|&nbsp;&nbsp;INTERNISTA&nbsp;&nbsp;|&nbsp;&nbsp;ARRITMIAS</p>
              <div class="dgp-content">
                 <p class="dgp-text">DGP&nbsp;&nbsp;</p>
                 <p class="dgp-number">3442264</p>
              </div>
           </div>
           <div class="ft-adress-content">
              <div class="ft-adress-inner">
                 <div class="adress">
                    <p>San Juan Bosco (Beethoven) #4743-8 [Entre Pintores y Abogados]</p>
                    <p>Col. Lomas de Guadalupe. Zapopan, Jal. C.P. 45038</p>
                 </div>
                 <div class="telefonos">
                    <p><a href="tel:35636022">T. 3563 6022 </a>| <a href="tel:33425155">3342 5155</a></p>
                    <div class="urgencias">
                       <p class="p-urgencias">URGENCIAS&nbsp;&nbsp;&nbsp;&nbsp;</p>
                       <p><a href="tel:3312427651">C. (33) 1242 7651</a></p>
                    </div>
                    <p><a href="mailto:arturofa98@hotmail.com">arturofa98@hotmail.com</a></p>
                 </div>
              </div>
              <div class="redes">
                 <a href=""><img src="assets/images/footer/facebook.png" alt=""></a>
                 <a href=""><img src="assets/images/footer/instagram.png" alt=""></a>
              </div>
           </div>
           <div class="ft-copyright-content">
              <p>Copyright © Dr. Arturo Flores 2018. Todos los Derechos Reservados.</p>
              <p><a href="#">Términos y condiciones / Políticas de privacidad</a></p>
           </div>
        </div>
     </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="assets/scripts/header.js"></script>
  <script src="assets/scripts/closeAdGeneral.js"></script>
  <script src="assets/scripts/enviarForm.js"></script>
  <!-- Validar Form -->
  <script src="assets/scripts/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script>
      $('#contact-form').submit(function(e){
      	e.preventDefault();
      	$('input').removeClass('error');
        $('textarea').removeClass('error');
        $('select').removeClass('error');
      	$('label.error').remove();
      	var name=$("input[name='nombre']");
        var apellidos=$("input[name='apellidos']");
        var pais=$("select[name='pais']");
        var estado=$("input[name='estado']");
      	var asunto=$("select[name='asunto']");
        var mensaje=$("textarea[name='mensaje']");
        var fecha=$("input[name='fecha']");
      	var email=$("input[name='email']");
      	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      	if(name.val() === ""){
      		$(name).addClass('error');
      		$(name).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(apellidos.val() === ""){
      		$(apellidos).addClass('error');
      		$(apellidos).after('<label class="error"> Campo obligatorio</label>');
        }
        if(fecha.val() === ""){
      		$(fecha).addClass('error');
      		$(fecha).after('<label class="error"> Campo obligatorio</label>');
        }
        if(pais.val() === "Elegir opción"){
      		$(pais).addClass('error');
      		$(pais).after('<label class="error"> Campo obligatorio</label>');
      	}
        if(estado.val() === ""){
      		$(estado).addClass('error');
      		$(estado).after('<label class="error"> Campo obligatorio</label>');
        }
      	if(asunto.val() === "Elije una opción"){
      		$(asunto).addClass('error');
      		$(asunto).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(mensaje.val() === ""){
      		$(mensaje).addClass('error');
      		$(mensaje).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(!pattern.test(email.val())){
      		$(email).addClass('error');
      		$(email).after('<label class="error"> El correo electrónico señalado es incorrecto</label>');				
      	}
      	if($('label.error').length == 0){
          console.log("se enviara un correo");
          contactoEnviarMensajeBtn_click();
          contactoEnviarDatos();
      	}
          return false;
      });
  </script>
</body>
</html>