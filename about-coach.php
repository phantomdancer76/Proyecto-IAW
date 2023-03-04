<!DOCTYPE html>
<?php
session_start();
function rutas($ruta, $ruta2)
{
  if (isset($_SESSION['email'])) {
    echo "href='./$ruta'";
  } else {
    echo "href='./$ruta2'";
  }
}
function check_admin($admin, $usuario)
{
  if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
      echo "href='./carrito-master/admin/$admin'";
    } else {
      echo "href='./carrito-master/$usuario'";
    }
  } else {
    echo "href='./olvidopass-master/index.php'";
  };
};

?>
<html class="wow-animation" lang="en">
  <head>
    <title>About Coach</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <!-- IE Panel-->
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="page-loader page-loader-variant-1">
      <div><img width='173' height='30' src='images/logo.png' alt=''/>
        <div class="offset-top-41 text-center">
          <div class="spinner"></div>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Head-->
      <header class="page-head slider-menu-position" data-preset='{"title":"Header with breadcrumbs","category":"header, breadcrumbs","reload":true,"id":"header-2"}'>
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar container rd-navbar-floated rd-navbar-dark" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Top Panel-->
              <div class="rd-navbar-top-panel context-dark bg-danger">
                <div class="left-side">
                  <address class="contact-info text-left"><a href="tel:#"><span class="icon mdi mdi-cellphone-android novi-icon"></span><span class="text-middle">671 33 25 46</span></a></address>
                </div>
                <div class="center">
                  <address class="contact-info text-left"><a href="#"><span class="icon mdi mdi-map-marker-radius novi-icon"></span><span class="text-middle">Calle de la santa fé, Jerez de la Frontera</span></a></address>
                </div>
                <div class="right-side">
                  <ul class="list-inline list-inline-sm">
                    <li class="list-inline-item"><a class="novi-icon fa fa-twitter" href="https://twitter.com/Phantom20870961"></a></li>
                    <li class="list-inline-item"><a class="novi-icon fa fa-youtube" href="https://www.youtube.com/@AdolfoTex"></a></li>
                  </ul>
                </div>
              </div>
              <!-- RD Navbar Panel -->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Top Panel Toggle-->
                <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a href="index.html"><img width='173' height='30' src='images/logo.png' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="index.html"><img width='173' height='30' src='images/logo.png' alt=''/></a></div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                    <li><a <?php
                            rutas('index2.php', 'index.html');
                            ?>><span>Inicio</span></a></li>
                    <li class="active"><a <?php
                            rutas("about-coach.php", "about-coach.html");
                            ?>><span>Entrenadores</span></a></li>
                    <li ><a <?php check_admin("index.php", "index.php") ?>>Tienda Online</a></li>
                    <li ><a href="featured.php"><span>Productos destacados</span></a></li>
                    <?php
                    if (isset($_SESSION['email'])) {
                      echo '<li><a href="./olvidopass-master/index.php">' . $_SESSION["email"] . '</a></li>';
                    } else {
                      echo '<li><a href="./olvidopass-master/index.php">Identifícate</a></li>';
                    }
                    if (isset($_SESSION['email'])) {
                      echo '<li><a href="./olvidopass-master/userAccount.php?logoutSubmit=1" class="logout">Logout</a></li>';
                    }
                    ?>
                  </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <div class="context-dark">
          <!-- Modern Breadcrumbs-->
          <section>
            <div class="parallax-container breadcrumb-modern bg-gray-darkest" data-parallax-img="images/804838.jpg">
              <div class="parallax-content"> 
                <div class="container section-top-98 section-bottom-34 section-lg-bottom-66 section-lg-98 section-xl-top-110 section-xl-bottom-41">
                  <h2 class="d-none d-lg-block offset-top-30"><span class="big">Entrenadores</span></h2>
                  <ul class="list-inline list-inline-dashed">
                    <li class="list-inline-item"><a href="index.html">Juan</a></li>
                    <li class="list-inline-item">Apruebame
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>
      </header>
      <!-- About-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Content block 2","category":"content","reload":true,"id":"content-block-2"}'>
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-5">
              <!-- Member block type 5-->
              <div class="member-block-type-5 inset-lg-right-20"><img class="img-fluid mx-auto d-block" src="images/justin_mediros.jpeg" width="437" height="437" alt=""/>
                <div class="member-block-body"><a class="btn btn-block btn-danger" href="#">Contactar</a>
                  <div class="offset-top-34">
                  </div>
                  <address class="contact-info offset-top-20 offset-md-top-34">
                    <ul class="list-unstyled p">
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-phone"></span><a class="p big text-middle d-inline-block offset-top-0" href="tel:1-800-1234-567">671 22 34 54</a></li>
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-email-open"></span><a class="p big text-middle d-inline-block offset-top-0 text-picton-blue" href="#">justinmediros@gmail.com</a></li>
                    </ul>
                  </address>
                </div>
              </div>
            </div>
            <div class="col-sm-10 col-md-7 text-md-left">
              <div>
                <h1 class="text-darker">Justin Mediros</h1>
              </div>
              <p class="text-muted offset-top-4">Entrenador de Crossfit</p>
              <hr class="divider bg-red hr-md-left-0">
              <p class="offset-top-50 text-left">Campeon mundial de crossfit de 2022 con más de 15 años de experiencia en el sector.</p>
              <div class="offset-top-30 text-center">
                <p>
                  <q class="font-italic h3 text-regular">El trabajo duro es algo que siempre no nos podemos permitir, los descansos hacen al ser humano fuerte</q>
                </p>
              </div>
              <div class="offset-top-30">
                <p class="text-left">Justin mediros se unió como plantilla a nuestro gimnasio después de ganar su campeonato, espero que difrutéis de lo que puede hacer realmente este hombre</p>
              </div>
              <div class="offset-top-50">
                <!-- Linear progress bar-->
                <div class="progress-linear" data-to="50">
                  <div class="progress-linear-header clearfix">
                    <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Fitness</span></div>
                    <div><span class="big text-ubold pull-right progress-linear-counter">50</span></div>
                  </div>
                  <div class="progress-linear-body">
                    <div class="progress-linear-bar bg-success"></div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="95">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">CrossFIT</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">95</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-info"></div>
                    </div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="20">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Yoga</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">20</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-warning"></div>
                    </div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="70">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Bodybuilding</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">70</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-danger"></div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <!-- About-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Content block 2","category":"content","reload":true,"id":"content-block-2"}'>
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-5">
              <!-- Member block type 5-->
              <div class="member-block-type-5 inset-lg-right-20"><img class="img-fluid mx-auto d-block" src="images/alexandra_gomez.jpg" width="437" height="437" alt=""/>
                <div class="member-block-body"><a class="btn btn-block btn-danger" href="#">Contactar</a>
                  <div class="offset-top-34">
                  </div>
                  <address class="contact-info offset-top-20 offset-md-top-34">
                    <ul class="list-unstyled p">
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-phone"></span><a class="p big text-middle d-inline-block offset-top-0" href="tel:1-800-1234-567">676 78 34 25</a></li>
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-email-open"></span><a class="p big text-middle d-inline-block offset-top-0 text-picton-blue" href="#">alexandra_gomez@gmail.com</a></li>
                    </ul>
                  </address>
                </div>
              </div>
            </div>
            <div class="col-sm-10 col-md-7 text-md-left">
              <div>
                <h1 class="text-darker">Alexandra Gómez</h1>
              </div>
              <p class="text-muted offset-top-4">Entrenadora de Fitness</p>
              <hr class="divider bg-red hr-md-left-0">
              <p class="offset-top-50 text-left">Campeona mundial de fitness collection de 2017 con más de 12 años de experiencia en fitness.</p>
              <div class="offset-top-30 text-center">
                <p>
                  <q class="font-italic h3 text-regular">Haz del fitness, un básico en tu vida, Bassic Fit</q>
                </p>
              </div>
              <div class="offset-top-30">
                <p class="text-left">Alexandra Gómez también fue monitora del gimnasio Basic Fit, pero se ve que el nuestro le gusta más.</p>
              </div>
              <div class="offset-top-50">
                <!-- Linear progress bar-->
                <div class="progress-linear" data-to="100">
                  <div class="progress-linear-header clearfix">
                    <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Fitness</span></div>
                    <div><span class="big text-ubold pull-right progress-linear-counter">100</span></div>
                  </div>
                  <div class="progress-linear-body">
                    <div class="progress-linear-bar bg-success"></div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="65">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">CrossFIT</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">65</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-info"></div>
                    </div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="40">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Yoga</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">40</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-warning"></div>
                    </div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="30">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Bodybuilding</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">30</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-danger"></div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <!-- About-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Content block 2","category":"content","reload":true,"id":"content-block-2"}'>
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-5">
              <!-- Member block type 5-->
              <div class="member-block-type-5 inset-lg-right-20"><img class="img-fluid mx-auto d-block" src="images/belen_juarez.jpeg" width="437" height="437" alt=""/>
                <div class="member-block-body"><a class="btn btn-block btn-danger" href="#">Contactar</a>
                  <div class="offset-top-34">
                  </div>
                  <address class="contact-info offset-top-20 offset-md-top-34">
                    <ul class="list-unstyled p">
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-phone"></span><a class="p big text-middle d-inline-block offset-top-0" href="tel:1-800-1234-567">676 76 54 23</a></li>
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-email-open"></span><a class="p big text-middle d-inline-block offset-top-0 text-picton-blue" href="#">belenJrz@gmail.com</a></li>
                    </ul>
                  </address>
                </div>
              </div>
            </div>
            <div class="col-sm-10 col-md-7 text-md-left">
              <div>
                <h1 class="text-darker">Belen Juárez</h1>
              </div>
              <p class="text-muted offset-top-4">Monitora de Yoga</p>
              <hr class="divider bg-red hr-md-left-0">
              <p class="offset-top-50 text-left">Nuestra mejor monitora de yoga orientada a principiantes y con capacidad para hacer sufrir a los más expertos, siempre desde una agradable sonrisa.</p>
              <div class="offset-top-30 text-center">
                <p>
                  <q class="font-italic h3 text-regular">En nuestra vida es importante ser flexibles en las decisiones que tomamos, lo mismo con el cuerpo, un cuerpo flexible es un cuerpo sano</q>
                </p>
              </div>
              <div class="offset-top-30">
                <p class="text-left">Belen Juarez se unió a nuestra plantilla, para devolveros eso que creíais perdido o que no teníais, la flexibilidad corporal y la relajación.</p>
              </div>
              <div class="offset-top-50">
                <!-- Linear progress bar-->
                <div class="progress-linear" data-to="30">
                  <div class="progress-linear-header clearfix">
                    <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Fitness</span></div>
                    <div><span class="big text-ubold pull-right progress-linear-counter">30</span></div>
                  </div>
                  <div class="progress-linear-body">
                    <div class="progress-linear-bar bg-success"></div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="20">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">CrossFIT</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">20</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-info"></div>
                    </div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="100">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Yoga</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">100</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-warning"></div>
                    </div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="15">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Bodybuilding</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">15</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-danger"></div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <!-- About-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Content block 2","category":"content","reload":true,"id":"content-block-2"}'>
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-5">
              <!-- Member block type 5-->
              <div class="member-block-type-5 inset-lg-right-20"><img class="img-fluid mx-auto d-block" src="images/arnold.jpg" width="437" height="437" alt=""/>
                <div class="member-block-body"><a class="btn btn-block btn-danger" href="#">Contactar</a>
                  <div class="offset-top-34">
                  </div>
                  <address class="contact-info offset-top-20 offset-md-top-34">
                    <ul class="list-unstyled p">
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-phone"></span><a class="p big text-middle d-inline-block offset-top-0" href="tel:1-800-1234-567">678 69 69 69</a></li>
                      <li><span class="novi-icon icon icon-xxs text-middle text-dark mdi mdi-email-open"></span><a class="p big text-middle d-inline-block offset-top-0 text-picton-blue" href="#">arnoldSchz@gmail.com</a></li>
                    </ul>
                  </address>
                </div>
              </div>
            </div>
            <div class="col-sm-10 col-md-7 text-md-left">
              <div>
                <h1 class="text-darker">Arnold Schwarzenegger</h1>
              </div>
              <p class="text-muted offset-top-4">Entrenador de Bodybuilding</p>
              <hr class="divider bg-red hr-md-left-0">
              <p class="offset-top-50 text-left">¿Quién no conoce a Arnold hoy en día? gran actor y también un amante del Bodybuilding perfecto para enseñar a principiantes.</p>
              <div class="offset-top-30 text-center">
                <p>
                  <q class="font-italic h3 text-regular">La genética es importante, pero no lo es todo, te demostraré con hechos lo que muchos no han hecho con palabras.</q>
                </p>
              </div>
              <div class="offset-top-30">
                <p class="text-left">Arnold se unió a nuestra plantilla después de ser una estrella del cine y tener un físico privilegiado</p>
              </div>
              <div class="offset-top-50">
                <!-- Linear progress bar-->
                <div class="progress-linear" data-to="30">
                  <div class="progress-linear-header clearfix">
                    <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Fitness</span></div>
                    <div><span class="big text-ubold pull-right progress-linear-counter">30</span></div>
                  </div>
                  <div class="progress-linear-body">
                    <div class="progress-linear-bar bg-success"></div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="20">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">CrossFIT</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">20</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-info"></div>
                    </div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="0">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Yoga</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">0</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-warning"></div>
                    </div>
                  </div>
                </div>
                <div class="offset-top-50">
                  <!-- Linear progress bar-->
                  <div class="progress-linear" data-to="100">
                    <div class="progress-linear-header clearfix">
                      <div><span class="progress-linear-title p text-ubold pull-left text-uppercase">Bodybuilding</span></div>
                      <div><span class="big text-ubold pull-right progress-linear-counter">100</span></div>
                    </div>
                    <div class="progress-linear-body">
                      <div class="progress-linear-bar bg-danger"></div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-base context-dark novi-background" data-preset='{"title":"Footer","category":"footer","reload":true,"id":"footer"}'>
        <div class="container">
          <div class="row justify-content-md-center text-xl-left">
            <div class="col-md-12">
              <div class="row justify-content-sm-center">
                <div class="col-sm-10 col-md-3 text-left order-md-4 col-md-10 col-xl-3 offset-md-top-50 offset-xl-top-0 order-xl-2">
                  <!-- Twitter Feed-->
                  <p class="text-uppercase text-spacing-60 font-weight-bold text-center text-xl-left">Twitter Feed</p>
                  <div class="offset-top-20">
                          <div class="twitter" data-twitter-username="templatemonster" data-twitter-date-hours=" hours ago" data-twitter-date-minutes=" minutes ago">
                            <div class="twitter-sm" data-twitter-type="tweet">
                              <div class="twitter-date text-dark small"><span class="icon icon-xxs mdi mdi-twitter text-middle"></span> <span class="text-middle" data-date="text"></span>
                              </div>
                              <div class="twitter-text" data-tweet="text"></div>
                              <div class="twitter-name font-weight-bold big" data-screen_name="text"></div>
                            </div>
                            <div class="twitter-sm" data-twitter-type="tweet">
                              <div class="twitter-date text-dark small"><span class="icon icon-xxs mdi mdi-twitter text-middle"></span> <span class="text-middle" data-date="text"></span>
                              </div>
                              <div class="twitter-text" data-tweet="text"></div>
                              <div class="twitter-name font-weight-bold big" data-screen_name="text"></div>
                            </div>
                          </div>
                  </div>
                </div>
                <div class="col-sm-10 col-md-3 offset-top-66 order-md-3 col-md-10 col-xl-2 offset-xl-top-0 order-xl-3">
                  <!-- Flickr Feed-->
                  <p class="text-uppercase text-spacing-60 font-weight-bold">Gallery</p>
                  <div class="offset-top-24">
                          <div class="group-xs flickr widget-flickrfeed" data-lightgallery="group" data-flickr-tags="tm58888_landscapes"><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-lightgallery="item" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="images/_blank.png" alt="" data-image_q="src"></a>
                          </div>
                  </div>
                </div>
                <div class="col-sm-10 col-md-3 offset-top-66 order-md-2 offset-md-top-0 col-md-6 col-xl-4 order-xl-4">
                  <div class="inset-xl-left-20">
                    <p class="text-uppercase text-spacing-60 font-weight-bold">Newsletter</p>
                    <p class="offset-top-20 text-left">
                      Keep up with our always upcoming  news and updates. Enter your e-mail and
                      subscribe to our newsletter.
                    </p>
                    <div class="offset-top-30">
                            <form class="rd-mailform" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                              <div class="form-group">
                                <div class="input-group input-group-sm"><span class="input-group-prepend"><span class="input-group-text input-group-icon"><span class="mdi mdi-email novi-icon"></span></span></span>
                                  <input class="form-control" placeholder="Type your E-Mail" type="email" name="email" data-constraints="@Required @Email"><span class="input-group-append">
                                    <button class="btn btn-sm btn-danger" type="submit">Subscribe</button></span>
                                </div>
                              </div>
                              <div class="form-output" id="form-subscribe-footer"></div>
                            </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-10 col-md-3 offset-top-66 order-md-1 offset-md-top-0 col-md-6 col-xl-3 order-xl-1">
                  <!-- Footer brand-->
                  <div class="footer-brand"><a href="index.html"><img width='173' height='30' src='images/logo.png' alt=''/></a></div>
                  <div class="offset-top-50 text-sm-center text-xl-left">
                          <ul class="list-inline">
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                            <li class="list-inline-item"><a class="novi-icon icon fa fa-linkedin icon-xxs icon-circle icon-darkest-filled" href="#"></a></li>
                          </ul>
                  </div>
                  <p class="text-darker offset-top-20">Intense Gym &copy; <span id="copyright-year"></span> .
                    Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>