<?php
if (!isset($_REQUEST['precioreembol'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Devolucion completada - PHP Carrito de Compras</title>
  <meta charset="utf-8">
  <style>
    .container {
      padding: 20px;
    }

    p {
      color: #34a853;
      font-size: 18px;
    }
    body{
      background-image: url("../images/pesa.jpg");
    }
  </style>
</head>
</head>

<body>
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">

        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="devolucion.php">Volver</a></li>
        </ul>
      </div>

      <div class="panel-body">

        <h1>Pedido Reembolsado</h1>
        <p>La Orden se ha devuelto perfectamente. el dinero reembolsado es <?php echo $_GET['precioreembol']; ?></p>
      </div>
    </div>
    <!--Panel cierra-->
  </div>
</body>

</html>