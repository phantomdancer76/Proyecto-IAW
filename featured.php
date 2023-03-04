<!DOCTYPE html>
<html class="wow-animation" lang="en">
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

<head>
  <title>Productos_destacados</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="keywords" content="intense web design multipurpose template">
  <meta name="date" content="Dec 26">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <!-- IE Panel-->
  <div class="page-loader page-loader-variant-1">
    <div><img width='173' height='30' src='images/logo.png' alt='' />
      <div class="offset-top-41 text-center">
        <div class="spinner"></div>
      </div>
    </div>
  </div>
  <!-- Page-->
  <div class="page text-center">
    <!-- Page Header-->
    <header class="page-head slider-menu-position" data-preset='{"title":"Header with breadcrumbs","category":"header, breadcrumbs","reload":true,"id":"header-2"}'>
      <!-- RD Navbar Transparent-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar container rd-navbar-floated rd-navbar-dark" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
          <div class="rd-navbar-inner">
            <!-- RD Navbar Top Panel-->
            <div class="rd-navbar-top-panel context-dark bg-danger">
              <div class="left-side">
                <address class="contact-info text-left"><a href="tel:#"><span class="icon mdi mdi-cellphone-android novi-icon"></span><span class="text-middle">671332546</span></a></address>
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
              <div class="rd-navbar-brand"><a href="index.html"><img width='173' height='30' src='images/logo.png' alt='' /></a></div>
            </div>
            <div class="rd-navbar-menu-wrap">
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-mobile-scroll">
                  <!--Navbar Brand Mobile-->
                  <div class="rd-navbar-mobile-brand"><a href="index.html"><img width='173' height='30' src='images/logo.png' alt='' /></a></div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li><a <?php
                            rutas('index2.php', 'index.html');
                            ?>><span>Inicio</span></a></li>
                    <li><a <?php
                            rutas("about-coach.php", "about-coach.html");
                            ?>><span>Entrenadores</span></a></li>
                    <li><a <?php check_admin("index.php", "index.php") ?>>Tienda Online</a></li>
                    <li class="active"><a href="featured.php"><span>Productos destacados</span></a></li>
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
                <h2 class="d-none d-lg-block offset-top-30"><span class="big">Mira nuestros mejores productos</span></h2>
                <ul class="list-inline list-inline-dashed">
                  <li class="list-inline-item"><a href="index.html">Juan</a></li>
                  <li class="list-inline-item">Apruébame
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </header>
    <!-- Heading Style-->
    <section class="section novi-background section-66 section-md-top-110">
      <div class="container">
        <h2>Productos destacados de la página</h2>
        <?php
        include "./carrito-master/Configuracion.php";
        echo "<div class='container'>";
        echo "<div class='row text-left offset-top-66'>";
        echo "<div class='col-8'>";
        $consulta = "SELECT * FROM mis_productos WHERE featured = 1;";
        $result = mysqli_query($db, $consulta) or die(mysqli_error($db));
        if (mysqli_num_rows($result) > 0) {
          while ($resultado = mysqli_fetch_assoc($result)) {
            $idprod = $resultado['id'];
            $nombreprod = $resultado['name'];
            $descripcionprod = $resultado['description'];
            $precioprod = $resultado['price'];
            $imagen = $resultado['image'];
            echo "<h1>$nombreprod</h1>";
            echo "<img width='500px' height='auto'src='images/$imagen'>";
            echo "<p>$descripcionprod</p>";
            echo "<p>$precioprod €</p>";
            if (isset($_SESSION['role'])) {
              if ($_SESSION['role'] == 'admin') {
                echo "<a class='btn btn-success' href='./carrito-master/admin/AccionCarta.php?action=addToCart&id=$idprod'>Enviar al Carrito</a>";
              } else {
                echo "<a class= 'btn btn-success' href='./carrito-master/AccionCarta.php?action=addToCart&id=$idprod'>Enviar al Carrito</a>";
              }
            } else {
              echo "<a class= 'btn btn-success' href='./olvidopass-master/index.php'>Enviar al Carrito</a>";
            };
          };
          echo "</div";
          echo "</div";
          echo "</div";
        } else {
          echo "no hay productos destacados...";
        };

        ?>

        <hr class="divider divider-md bg-red">
      </div>
    </section>
    <!-- Page Footer-->
    <!-- Page Footer-->
    <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-base context-dark novi-background" data-preset='{"title":"Footer","category":"footer","reload":true,"id":"footer"}'>
      <div class="container">
        <div class="row justify-content-md-center text-xl-left">
          <div class="col-md-12">
            <div class="row justify-content-sm-center">
            </div>
            <div class="col-sm-10 col-md-3 offset-top-66 order-md-1 offset-md-top-0 col-md-6 col-xl-3 order-xl-1">
              <!-- Footer brand-->
              <div class="footer-brand"><a href="index.html"><img width='173' height='30' src='images/logo.png' alt='' /></a></div>
              <div class="offset-top-50 text-sm-center text-xl-left">

              </div>
              <p class="text-darker offset-top-20">Intense Gym &copy; <span id="copyright-year"></span> .
                Design&nbsp;by&nbsp;<a href="#">Óscar Álvarez Lucas</a>
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