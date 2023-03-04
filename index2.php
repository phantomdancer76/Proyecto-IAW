<!DOCTYPE html>
<html class="wow-animation" lang="en">
  <head>
    <title>Home</title>
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

  <?php
      //start session
      session_start();
			include "./olvidopass-master/user.php";
      include "./olvidopass-master/dbConfig.php";
      $redirect = '';
      $email = $_SESSION['email'];
      $selectquery = "SELECT * FROM users WHERE email = '$email';";
      $result = mysqli_query($mysqli, $selectquery) or die(mysqli_error($mysqli));
      //Si es mayor que cero el número de filas obtenidas
      if (mysqli_num_rows($result) > 0) {
        //Recorremos cada una de las filas de la tabla para obtener todos los productos.
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION['email']=$row['email'];
                $_SESSION['id']=$row['id'];
                $_SESSION['userID']=$row['id'];
                $_SESSION['first_name']=$row['first_name'];
                $_SESSION['last_name']=$row['last_name'];
                $_SESSION['phone']=$row['phone'];
                $_SESSION['role']=$row['role'];
            }
        } else {
            echo "<script>alert('0 Resultados');</script>";
        }

		?>
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
      <header class="page-head slider-menu-position" data-preset='{"title":"Header with slider","category":"header, slider","reload":true,"id":"header-1"}'>
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar container rd-navbar-floated rd-navbar-dark" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Top Panel-->
              <div class="rd-navbar-top-panel context-dark bg-danger">
                <div class="left-side">
                  <address class="contact-info text-left"><a href="tel:#"><span class="icon mdi mdi-cellphone-android novi-icon"></span><span class="text-middle">1-800-1324-567</span></a></address>
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
                <div class="rd-navbar-brand"><a href="index2.php"><img width='173' height='30' src='images/logo.png' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="index2.php"><img width='173' height='30' src='images/logo.png' alt=''/></a></div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="active"><a href="index2.php"><span>Inicio</span></a></li>
                      <li><a href="about-coach.php"><span>Entrenadores</span></a></li>
                      <li><a href="<?php if ($_SESSION['role'] === 'admin'){
                        $redirect = "./carrito-master/admin/index.php";
                      } else {
                        $redirect = "./carrito-master/index.php";
                      }
                      echo $redirect?>"><span>Tienda Online</span></a></li>
                      <li><a href="featured.php"><span>Productos destacados</span></a></li>
                      <li><a href="olvidopass-master/index.php"><?php echo $_SESSION['email']?></a></li>
                      <li><a href="./olvidopass-master/userAccount.php?logoutSubmit=1" class="logout">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <!--Swiper-->
        <div class="swiper-container swiper-slider" data-loop="false" data-autoplay="5500" data-dragable="false">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide" data-slide-bg="images/mamadisimo.jpg" data-preview-bg="images/background-01-1920x750.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">Sin sufrimiento no hay ganancia</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">
                          Tener un cuerpo perfecto requiere de mucho entrenamiento. Un cuerpo que se ve bien
                          y un organismo fuerte están interconectados, y nosotros te podemos ayudar con eso.
                        </h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="olvidopass-master/index.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">Inscríbete Ahora</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/Mujerblackbg.jpg" data-preview-bg="images/background-02-1920x750.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">Nunca te rindas</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">Toda persona que construye su cuerpo requiere de muchísima dedicación y esfuerzo para darle forma a su cuerpo para que se ajuste a algo de lo que estar orgulloso. Te podemos dar todo lo necesario para que consigas tu objetivo
                        </h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="olvidopass-master/index.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">Inscríbete Ahora</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/tercera_barra.jpg" data-preview-bg="images/tercera_barra.jpg">
              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">Puedes ir más allá</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">Los clientes de nuestro gimnasio no solo reciven lo justo y necesario en cuanto equipamiento, si no que reciben apoyo moral y motivacional para conseguir su meta de entrenamiento
                        </h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="olvidopass-master/index.php" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">Inscríbete Ahora</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button swiper-button-prev swiper-parallax mdi mdi-chevron-left"></div>
          <div class="swiper-button swiper-button-next swiper-parallax mdi mdi-chevron-right"></div>
          <div class="swiper-pagination"></div>
        </div>
      </header>
      <!--Welcome-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Content block 1","category":"content","id":"content-block-1"}'>
        <div class="container">
          <h1>¡Bienvenido!</h1>
          <hr class="divider bg-red">
          <div class="row justify-content-sm-center offset-top-66">
            <div class="col-xl-8">
              <p>¡Bienvenido/a a Intense Gym! Te ayudaremos a conseguir tus objetivos con las características que ofrecemos, Aquí tenemos unos ejemplos:</p>
            </div>
          </div>
          <div class="row justify-content-center grid-group-lg offset-top-98">
            <div class="col-md-8 col-lg-4">
              <!-- Icon Box Type 5-->
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-sm icon-dark-filled mdi mdi-account-multiple"></span>
                <h4 class="text-danger offset-top-20">Entrenadores cualificados</h4>
                <p>Nuestros entrenadores están perfectamente cualificados para ayudarte a cumplir tus objetivos.</p>
              </div>
            </div>
            <div class="col-md-8 col-lg-4">
              <!-- Icon Box Type 5-->
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-xs icon-dark-filled mdi mdi-thumb-up"></span>
                <h4 class="text-danger offset-top-20">Acercamiento individual</h4>
                <p>Cada cliente podrá pedir su programa de entrenamiento personalizado basado a sus necesidades.</p>
              </div>
            </div>
            <div class="col-md-8 col-lg-4">
              <!-- Icon Box Type 5-->
              <div class="box-icon box-icon-bordered"><span class="novi-icon icon icon-outlined icon-sm icon-dark-filled mdi mdi-dumbbell"></span>
                <h4 class="text-danger offset-top-20">Equipamiento novedoso, moderno y de alta gama</h4>
                <p>Nuestros proveedores nos miman y se preocupan por la calidad del equipo que se usa en nuestro gimnasio</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Offers-->
      <section data-preset='{"title":"Carousel 1","category":"content, carousel","reload":true,"id":"carousel-1"}'>
        <div class="owl-carousel owl-carousel-default d-lg-none-owl-dots veil-owl-nav d-lg-owl-nav" data-items="1" data-sm-items="2" data-lg-items="3" data-xl-items="4" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/hombre-bodybuilding-768x500.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Bodybuilding</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="olvidopass-master/index.php">Primera clase gratuita</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/fitness-mujer-web-e1581957581598.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Fitness</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="olvidopass-master/index.php">Primera clase gratuita</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/diesel-fitness-box-23.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Crossfit</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="olvidopass-master/index.php">Primera clase gratuita</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/mejores-clases-ejericio-colectiv.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Clases conjuntas</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">Primera clase gratuita</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/article-duracion-optima-entrenam.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Entrenamiento de fuerza</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="olvidopass-master/index.php">Primera clase gratuita</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/yogayoga.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Yoga</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="olvidopass-master/index.php">Primera clase gratuita</a>
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
      <!-- Coaches-->
      <section class="section-98 section-md-110 novi-background" data-preset='{"title":"Team","category":"content, team","reload":false,"id":"team"}'>
        <div class="container">
          <h1>Entrenadores</h1>
          <hr class="divider bg-danger">
          <div class="row justify-content-sm-center offset-top-66">
            <div class="col-md-10 col-xl-12">
              <div class="row">
                <div class="col-md-6 col-xl-3">
                  <!-- Box Member-->
                  <div class="box-member"><img class="img-fluid" src="images/justin-medeiros-syndicate-crown.jpg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.php">Justin Mediros</a> <small class="text-danger">CrossFit</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">Campeon mundial de crossfit de 2022 con más de 15 años de experiencia en el sector.</p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-md-top-0 offset-xl-top-0">
                  <!-- Box Member-->
                  <div class="box-member"><img class="img-fluid" src="images/alexandra.jpg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.php">Alexandra Gómez</a> <small class="text-danger">Fitness</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">Campeona mundial de fitness collection de 2017 con más de 12 años de experiencia en fitness</p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-xl-top-0">
                  <!-- Box Member-->
                  <div class="box-member"><img class="img-fluid" src="images/descarga.jpg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.php">Belen Juarez</a> <small class="text-danger">Yoga</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">Nuestra mejor monitora de yoga orientada a principiantes y con capacidad para hacer sufrir a los más expertos, siempre desde una agradable sonrisa</p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-xl-top-0">
                  <!-- Box Member-->
                  <div class="box-member"><img class="img-fluid" src="images/swasenager.jpg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.php">Arnold Schwarzenegger</a> <small class="text-danger">Bodybuilding</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">¿Quién no conoce a Arnold hoy en día? gran actor y también un amante del Bodybuilding perfecto para enseñar a principiantes</p>
                </div>
              </div><a class="offset-top-66 btn btn-danger" href="about-coach.php">Ver entrenadores</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials-->
      <section data-preset='{"title":"Testimonials","category":"content, testimonials, parallax","reload":true,"id":"testimonials"}'>
        <div class="parallax-container" data-parallax-img="images/testimonial_oscar.jpg">
          <div class="parallax-content">
            <div class="bg-overlay-gray-darkest context-dark">
              <div class="container section-98 section-md-110">
                <h1>Opinion Destacada</h1>
                <hr class="divider bg-white">
                <div class="row justify-content-sm-center">
                  <div class="col-md-8">
                    <!-- Testimonials Slider v.3-->
                    <div class="owl-carousel owl-carousel-testimonials-2" data-items="1" data-nav="true" data-dots="false" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
                      <div>
                        <blockquote class="quote quote-slider-3">
                          <p class="quote-body">Desde que me apunté a este gimnasio, mi vida a mejorado muchísimo, fui capaz de conseguir mis objetivos gracias al equipazo de profesionales que se gastan los del Intense Free Gym, para que veais si he mejorado, he podido acabar la página web que mandó Juan para el proyecto de fin de curso</p><img class="quote-img rounded-circle" width="80" height="80" src="images/oscar.png" alt="oscar"/>
                          <p class="font-weight-bold quote-author">
                            <cite class="text-normal">Óscar Álvarez</cite>
                          </p>
                          <p class="quote-desc text-gray">Cliente Habitual (como en el comedia)</p>
                        </blockquote>
                      </div>
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
               </div>
                <div class="col-sm-10 col-md-3 offset-top-66 order-md-1 offset-md-top-0 col-md-6 col-xl-3 order-xl-1">
                  <!-- Footer brand-->
                  <div class="footer-brand"><a href="index2.php"><img width='173' height='30' src='images/logo.png' alt=''/></a></div>
                  <div class="offset-top-50 text-sm-center text-xl-left">
            
                  </div>
                  <p class="text-darker offset-top-20">Intense Gym &copy; <span id="copyright-year"></span> .
                    Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">Óscar Álvarez Lucas</a>
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