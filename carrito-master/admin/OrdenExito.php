<?php
if (!isset($_REQUEST['id'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" href="../../images/favicon.ico" type="image/x-icon">

  <title>Orden Completado - PHP Carrito de Compras</title>
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
      background-image: url("../../images/pesa.jpg");
    }
  </style>
</head>
</head>

<body>
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">

        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="index.php">Volver</a></li>
        </ul>
      </div>

      <div class="panel-body">

        <h1>Estado de tu Requerimiento</h1>
        <p>La Orden se ha enviado exitósamente. El ID de tu pedido es <?php echo $_GET['id']; ?></p>
      </div>
    </div>
    <!--Panel cierra-->
  </div>
</body>

</html>