<?php
include 'Configuracion.php';
?>
<?php
      //start session
      session_start();
      $iduser = $_SESSION['userID'];

      include "../../olvidopass-master/dbConfig.php";
      $selectquery = "SELECT * FROM users WHERE id = $iduser;";
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
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Historial de compras para <?php echo $_SESSION['email'];?>
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .container {
            padding: 20px;
        }

        .cart-link {
            width: 100%;
            text-align: right;
            display: block;
            font-size: 22px;
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
                    <li role="presentation"><a href="index.php">Inicio</a></li>
                    <li role="presentation"><a href="VerCarta.php">Carrito de Compras</a></li>
                    <li role="presentation"><a href="Pagos.php">Pagar</a></li>
                    <li role="presentation"><a href="AgregarProducto.php">Nuevo Producto</a></li>
                    <li role="presentation"><a href="ModificarProducto.php">Modificar Producto</a></li>
                    <li role="presentation"><a href="EliminarProducto.php">Eliminar Producto</a></li>
                    <li role="presentation" class="active"><a href="historialCompras.php">Historial de Compras</a></li>
                    <li role="presentation"><a href="devolucion.php">Devolución de orden</a></li>
                    <li role="presentation"><a href="../../index2.php">Volver a la página principal</a></li>
                </ul>
            </div>

            <div class="panel-body">
                <h1>Tienda de Productos - historial de compra para <?php echo $_SESSION['email'];
                ?></h1>
                </br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Codigo identificador</th>
                            <th>Precio total</th>
                            <th>Fecha de creación</th>
                            <th>&nbsp;</th>
                            <th>Ver orden</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //start session
                        $iddeusuario = $_SESSION['userID'];
                        //Incluimos el fichero de configuración para poder conectarnos con la BBDD.
                        include 'Configuracion.php';
                        $selectquery = "SELECT id, total_price, created FROM orden WHERE customer_id = $iddeusuario;";
                        $result = mysqli_query($db , $selectquery) or die(mysqli_error($db));

                        //Si es mayor que cero el número de filas obtenidas
                        if (mysqli_num_rows($result) > 0) {
                        //Recorremos cada una de las filas de la tabla para obtener todos los productos.
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "
                                <tr>
                                    <td>".$row["id"]."</td>
                                    <td>".$row["total_price"]."</td>
                                    <td>".$row["created"]."</td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <a href='VerUnaOrden.php?id=". $row["id"]."' class='btn btn-info'><i class='glyphicon glyphicon-plus'></i></a>
                                    </td>
                                </tr>
                                ";
                            }
                        } else {
                            echo "<script>alert('0 Resultados');</script>";
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Volver a la tienda</a></td>
                            <td colspan="2"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!--Panek cierra-->
        <div class="panel-footer"></div>
    </div>
</body>

</html>