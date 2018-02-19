<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dr. Arturo Flores | Enfermedades</title>
  <link rel="icon" type="image/png" href="assets/images/favicon-01.png">
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
            <li>
              SERVICIOS
            </li>
          </a>
          <a href="enfermedades">
            <li class="active-nav">
              ENFERMEDADES
            </li>
          </a>
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
           
                <div class="service">
                  <div class="line">
                      <p class="p-space">&nbsp;</p><p class="p-space">&nbsp;</p><hr class="hr-space" >
                  </div>
                  <div class="info">
                     <h2 class="service-title-2">DISPOSITIVOS</h2>
                     <a href="marcapaso"><p class="p-info-3">MARCAPASO</p></a>
                     <a href="cardiodesfibrilador"><p class="p-info-3">CARDIODESFIBRILADOR</p></a>
                     <a href="resincronizador-cardiaco"><p class="p-info-3">RESINCRONIZADOR CARDIACO</p></a>
                  </div>
                </div>
        

                <div class="service">
                  <div class="line">
                      <p class="p-space">&nbsp;</p><p class="p-space">&nbsp;</p><hr class="hr-space" >
                  </div>
                  <div class="info">
                     <h2 class="service-title-3">GENERALES</h2>
                     <a href="estudio-electrofisiologico"><p class="p-info-3">ESTUDIO ELECTROFISIOLOGICO</p></a>
                     <a href="arritmias"><p class="p-info-3">ARRITMIAS</p></a>
                     <a href="infartos"><p class="p-info-3">INFARTOS</p></a>
                     <a href="hipertension-arterial"><p class="p-info-3">HIPERTENSIÓN ARTERIAL</p></a>
                     <a href="insuficiencia-cardiaca"><p class="p-info-3">INSUFICIENCIA CARDIACA</p></a>
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
