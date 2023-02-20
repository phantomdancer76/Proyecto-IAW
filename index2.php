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
      $email = $_SESSION['email'];
      $selectquery = "SELECT * FROM users WHERE email = '$email';";
      $result = mysqli_query($mysqli, $selectquery) or die(mysqli_error($mysqli));
      //Si es mayor que cero el número de filas obtenidas
      if (mysqli_num_rows($result) > 0) {
        //Recorremos cada una de las filas de la tabla para obtener todos los productos.
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION['id']=$row['id'];
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
                    <li class="list-inline-item"><a class="novi-icon fa fa-facebook" href="#"></a></li>
                    <li class="list-inline-item"><a class="novi-icon fa fa-twitter" href="#"></a></li>
                    <li class="list-inline-item"><a class="novi-icon fa fa-google-plus" href="#"></a></li>
                    <li class="list-inline-item"><a class="novi-icon fa fa-youtube" href="#"></a></li>
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
                      <li class="active"><a href="index.html"><span>Inicio</span></a></li>
                      <li><a href="about-coach.html"><span>Entrenadores</span></a></li>
                      <li><a href="./carrito-master/index.php"><span>Tienda Online</span></a></li>
                      <li><a href="contacts.html"><span>Información de usuario</span></a></li>
                      <li><a href="olvidopass-master/userDashboard.php"><?php echo $_SESSION['email']?></a></li>
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
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">No Pain No Gain</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">
                          Having a perfect body requires a lot of training. Nice-looking body and
                          powerful organism are interconnected – and we can help you with both.
                        </h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">get started</span></a></div>
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
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">never give up</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">Every bodybuilder requires a lot of dedication and effort to shape his/her body into something to be proud of. We can give you everything you need for it.</h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">get started</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/tercera_barra.jpg" data-preview-bg="images/tercera_barra.jpg">              <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="row justify-content-xl-center">
                      <div class="col-xl-12">
                        <div class="text-extra-big font-weight-bold font-italic text-uppercase" data-caption-animate="fadeInUp" data-caption-delay="300">You can go the distance</div>
                      </div>
                      <div class="col-xl-8 offset-top-10">
                        <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">Clients of our gym receive not only necessary equipment for their workouts but also friendly support in achieving their number one training goal.</h5>
                        <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#" data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span class="btn-text">get started</span></a></div>
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
          <h1>Bienvenido </h1>
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
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/hombre-bodybuilding-768x500.png" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Bodybuilding</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">Primera clase gratuita</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/mujerfitness.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Fitness</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">Primera clase gratuita</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/para_crossfit.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Crossfit</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">Primera clase gratuita</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/mejores-clases-ejericio-colectivas-en-grupo-gimnasio-powerpump-1.jpg" alt=""/></a>
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
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/article-duracion-optima-entrenamiento-fuerza-5900c8e5d7bbf.jpeg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Entrenamiento de fuerza</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">Primera clase gratuita</a>
              </figcaption>
            </figure>
          </div>
          <div>
            <!-- Thumbnail Terry-->
            <figure class="thumbnail-terry"><a href="#"><img width="480" height="480" src="images/ABCSK3N4WUP66TNYP42VYTZFTM.jpg" alt=""/></a>
              <figcaption>
                <div>
                  <h4 class="thumbnail-terry-title">Yoga</h4>
                </div>
                <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger" href="#">Primera clase gratuita</a>
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
                  <div class="box-member"><img class="img-fluid" src="images/user-ryan-jackson-270x270.jpg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.html">Justin Mediros</a> <small class="text-danger">CrossFit</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">Campeon mundial de crossfit de 2022 con más de 15 años de experiencia en el sector.</p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-md-top-0 offset-xl-top-0">
                  <!-- Box Member-->
                  <div class="box-member"><img class="img-fluid" src="images/user-emily-perkins-270x270.jpg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.html">Alexandra Gómez</a> <small class="text-danger">Fitness</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">Emily can teach you all peculiarities of fitness and aerobics in a group or individually.</p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-xl-top-0">
                  <!-- Box Member-->
                  <div class="box-member"><img class="img-fluid" src="images/user-samantha-ruiz-270x270.jpg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.html">Samantha Ruiz</a> <small class="text-danger">Yoga</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">Our leading yoga coach, Samantha, will help you reach full harmony with your body.</p>
                </div>
                <div class="col-md-6 col-xl-3 offset-top-66 offset-xl-top-0">
                  <!-- Box Member-->
                  <div class="box-member"><img class="img-fluid" src="images/user-austin-ortiz-270x270.jpg" alt=""/>
                    <h5 class="font-weight-bold offset-top-20"><a href="about-coach.html">Austin Ortiz</a> <small class="text-danger">Bodybuilding</small>
                    </h5>
                    <div class="box-member-caption">
                      <div class="box-member-caption-inner">
                        <ul class="list-inline list-inline-xs">
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-facebook icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-twitter icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                          <li class="list-inline-item"><a class="novi-icon icon fa fa-google-plus icon-xs icon-circle icon-darkest-filled" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="offset-xl-top-0 text-muted">Austin is not only our most called-for coach, but also a winner of many championships.</p>
                </div>
              </div><a class="offset-top-66 btn btn-danger" href="about-coach.html">view all coaches</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials-->
      <section data-preset='{"title":"Testimonials","category":"content, testimonials, parallax","reload":true,"id":"testimonials"}'>
        <div class="parallax-container" data-parallax-img="images/background-05-1920x850.jpg">
          <div class="parallax-content">
            <div class="bg-overlay-gray-darkest context-dark">
              <div class="container section-98 section-md-110">
                <h1>Testimonials</h1>
                <hr class="divider bg-white">
                <div class="row justify-content-sm-center">
                  <div class="col-md-8">
                    <!-- Testimonials Slider v.3-->
                    <div class="owl-carousel owl-carousel-testimonials-2" data-items="1" data-nav="true" data-dots="false" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
                      <div>
                        <blockquote class="quote quote-slider-3">
                          <p class="quote-body">I came here to acquire the shape of my body I had half a year ago. I was quite surprised with a range of services they offered me at Intense Gym. Moreover, you can benefit from their group training</p><img class="quote-img rounded-circle" width="80" height="80" src="images/user-alisa-milano-80x80.jpg" alt="Alice Wilson"/>
                          <p class="font-weight-bold quote-author">
                            <cite class="text-normal">Alice Wilson</cite>
                          </p>
                          <p class="quote-desc text-gray">Regular Client</p>
                        </blockquote>
                      </div>
                      <div>
                        <blockquote class="quote quote-slider-3">
                          <p class="quote-body">I have had the phenomenal pleasure of working out with Intense Gym coaches as a client and friend throughout the last year. Their magnetic personalities ensure that a friendship will inevitably develop throughout the training course.</p><img class="quote-img rounded-circle" width="80" height="80" src="images/user-july-mao-80x80.jpg" alt="Julie Smith"/>
                          <p class="font-weight-bold quote-author">
                            <cite class="text-normal">Julie Smith</cite>
                          </p>
                          <p class="quote-desc text-gray">Regular Client</p>
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