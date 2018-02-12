<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dr. Arturo Flores | Servicios</title>
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
      <a href="index">
        <img src="assets/images/logos/isotipo.png" class="logo-header" alt="">
      </a>
      <nav role="navigation">
        <ul>
          <a href="index">
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
            <li class="active-nav">
              SERVICIOS
            </li>
          </a>
          <li class="sub-menu-content">
              ENFERMEDADES
              <ul class="ul-sub-menu">
                <li><a href="marcapaso">Marcapaso</a></li>
                <li><a href="cardiodesfibrilador">Cardiodesfibrilador</a></li>
                <li><a href="resincronizador-cardiaco">Resincronizador cardiaco</a></li>
                <li><a href="estudio-electrofisiologico">Estudio Electrorisiológico</a></li>
                <li><a href="arritmias">Arritmias</a></li>
                <li><a href="infartos">Infarto</a></li>
                <li><a href="hipertension-arterial">Hipertensión arterial</a></li>
                <li><a href="insuficiencia-cardiaca">Insuficiencia cardiaca</a></li>
              </ul>
          </li>
          <a href="contacto">
            <li>
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
           <a href="tel:3312427651">PARA EMERGENCIAS LLÁMENOS AL (33) 1242 7651</a>
        </div>
        <img src="assets/images/aviso/x.svg" class="closeIcon" alt="">
     </div>
  </div>

  <!--  Main content -->
  <main class="j-workspace ">
     <!-- Servicios -->
     <section class="">
        <div class="services-container">
          <div class="services-content"> 
              <div class="j-wrap">
                <div class="services-title-content">
                  <h2 class="services-h2">SERVICIOS</h2>
                </div>
            </div>

           
                <div class="service">
                  <div class="line">
                      <p class="p-space">&nbsp;</p><p class="p-space">&nbsp;</p><hr class="hr-space" >
                  </div>
                  <div class="info">
                      <p class="p-info-1">consulta</p>
                      <p class="p-info-2">general Cardiología</p>

                      <p class="p-info">infartos // angina de pecho</p>
                      <p class="p-info">insufiencia cardiaca</p>
                      <p class="p-info">hipertensiòn arterial</p>
                      <p class="p-info">arritmias</p>
                      <p class="p-info">valoración preoperatoria</p>
                  </div>
                </div>
        

                <div class="service">
                  <div class="line">
                      <p class="p-space">&nbsp;</p><p class="p-space">&nbsp;</p><hr class="hr-space" >
                  </div>
                  <div class="info">
                      <p class="p-info-1">manejo integral</p>
                      <p class="p-info-2">de arritmias cardiacas</p>

                      <p class="p-info">estudio electrofisiológico</p>
                      <p class="p-info">ablación arritmias cardiacas</p>
                      <p class="p-info">tratamiento especializado</p>
                      <p class="p-info">seguimiento y vigilancia</p>
                  </div>
                </div>

                
                <div class="service">
                  <div class="line">
                      <p class="p-space">&nbsp;</p><hr class="hr-space" >
                  </div>
                  <div class="info">
                      <p class="p-info-2">marcapasos</p>

                      <p class="p-info">implantación</p>
                      <p class="p-info">programación</p>
                      <p class="p-info">seguimiento y vigilancia</p>
                  </div>
                </div>


                <div class="service">
                  <div class="line">
                      <p class="p-space">&nbsp;</p><p class="p-space">&nbsp;</p><hr class="hr-space" >
                  </div>
                  <div class="info">
                      <p class="p-info-1">desfibrilador</p>
                      <p class="p-info-2">automatico implantable</p>

                      <p class="p-info">implantación</p>
                      <p class="p-info">programación</p>
                      <p class="p-info">seguimiento y vigilancia</p>
                      
                  </div>
                </div>



                <div class="service">
                    <div class="line">
                        <p class="p-space">&nbsp;</p><p class="p-space">&nbsp;</p><hr class="hr-space" >
                    </div>
                    <div class="info">
                        <p class="p-info-1">resincronizador</p>
                        <p class="p-info-2">cardiaco</p>
  
                        <p class="p-info">implantación</p>
                        <p class="p-info">programación</p>
                        <p class="p-info">seguimiento y vigilancia</p>
                    </div>
                  </div>


          </div>
        </div>
     </section>


     
         
  </main>
  <?php require 'footer.php';?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="assets/scripts/ripple.js"></script>
  <script src="assets/scripts/header.js"></script>
  <script src="assets/scripts/submenu.js"></script>
  <script src="assets/scripts/closeAdGeneral.js"></script>
</body>
</html>
