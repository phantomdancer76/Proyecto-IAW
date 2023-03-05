<?php
include 'Configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ver artículos de la carta</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">

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
                    <li role="presentation"><a href="index.php">Inicio</a></li>
                    <li role="presentation"><a href="VerCarta.php">Carrito de Compras</a></li>
                    <li role="presentation"><a href="Pagos.php">Pagar</a></li>
                    <li role="presentation" class="active"><a href="historialCompras.php">Historial de Compras</a></li>
                    <li role="presentation"><a href="devolucion.php">Devolución de orden</a></li>
                    <li role="presentation"><a href="../index2.php">Volver a la página principal</a></li>
                </ul>
            </div>

            <div class="panel-body">
                <h1>Tienda de Productos - Historial de compras</h1>
                </br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <?php
                        //start session
                        session_start();
                        //Incluimos el fichero de configuración para poder conectarnos con la BBDD.
                        include 'Configuracion.php';
                        if(!empty($_REQUEST['id'])){
                            $idpasada=$_REQUEST['id'];

                            $selectquery = "SELECT mis_productos.name AS 'nombre', mis_productos.description AS 'descripcion', orden_articulos.quantity AS quantity FROM orden_articulos JOIN orden ON orden_articulos.order_id = orden.id JOIN mis_productos ON mis_productos.id = orden_articulos.product_id WHERE orden_articulos.order_id=$idpasada;";
                            $result = mysqli_query($db , $selectquery) or die(mysqli_error($db));

                            if (mysqli_num_rows($result) > 0) {
                                //Recorremos cada una de las filas de la tabla para obtener todos los productos.
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "
                                        <tr>
                                            <td>".$row["nombre"]."</td>
                                            <td>".$row["descripcion"]."</td>
                                            <td>".$row["quantity"]."</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        ";
                                    }
                                }
                        }
                    ?>
                </table>
                <!--<a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>-->
                <a href="historialCompras.php" class="btn btn-info"><i class="glyphicon glyphicon-menu-left"></i> Volver</a>
 			</form>
                </div>
            </div>
        </div>
        <!--Panek cierra-->

    </div>
</body>

</html>