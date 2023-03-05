<?php
include 'Configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Carrito de Compras</title>
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
        background-image: url("../images/pesa.jpg");
    }
    li {
        list-style: none;
    }
    </style>
</head>
</head>

<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">

                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="index.php">Inicio</a></li>
                    <li role="presentation"><a href="VerCarta.php">Carrito de Compras</a></li>
                    <li role="presentation"><a href="Pagos.php">Pagar</a></li>
                    <li role="presentation"><a href="historialCompras.php">Historial de Compras</a></li>
                    <li role="presentation"><a href="devolucion.php">Devolución de orden</a></li>
                    <li role="presentation"><a href="../index2.php">Volver a la página principal</a></li>
                </ul>
            </div>

            <div class="panel-body">
                <h1>Tienda de Productos</h1>
                <a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                <div id="products" class="row list-group">
                    <?php
                    $directorio_image = "../images/";
                    if (!empty($_REQUEST["nume"])) {
                        $_REQUEST["nume"] = $_REQUEST["nume"];
                    } else {
                        $_REQUEST["nume"] = '1';
                    }
                    if ($_REQUEST["nume"] == "") {
                        $_REQUEST["nume"] = "1";
                    }
                    $articulos = mysqli_query($db, "SELECT * FROM mis_productos  ;");
                    $num_registros = @mysqli_num_rows($articulos);
                    $registros = '2';
                    $pagina = $_REQUEST["nume"];
                    if (is_numeric($pagina))
                        $inicio = (($pagina - 1) * $registros);
                    else
                        $inicio = 0;
                    $busqueda = mysqli_query($db, "SELECT * FROM mis_productos LIMIT $inicio,$registros;");
                    $paginas = ceil($num_registros / $registros);

                    ?>
                    <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM mis_productos ORDER BY id DESC LIMIT 10");
                    if ($num_registros > 0) {
                        while ($resultados = mysqli_fetch_assoc($busqueda)) {
                    ?>

                            <div style="min-width: 80%; justify-content: center; text-align: center" class="item col-lg-4">
                                <div style="min-width: 80%" class="thumbnail">
                                    <div style="min-width: 80%" class="caption">
                                        <h4 class="list-group-item-heading"><?php echo $resultados["name"]; ?><?php 
                                        if($resultados['featured'] == 1){
                                            echo '<p class="btn btn-danger">DESTACADO <i style="color:yellow" class="glyphicon glyphicon-star	
                                            "></i> </p>';
                                        }
                                        ?></h4>
                                        <p class="list-group-item-text"><?php echo $resultados["description"]; ?></p>
                                        <br>
                                        <p class="list-group-item-text"><img width="600px" src="<?php echo $directorio_image.$resultados["image"]?>" alt=""></p>
                                        <div class="row">
                                            <div class="row">
                                                <p class="lead"><?php echo '€' . $resultados["price"] . 'EUR'; ?></p> <br>
                                            </div>
                                            <div class="row">
                                                <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $resultados["id"]; ?>"><i class="glyphicon glyphicon-shopping-cart"></i> Enviar al Carrito</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        <p>Producto(s) no existe.....</p>
                    <?php } ?>
                    <div style="min-width: 80%; justify-content: center; text-align: center" class="item col-lg-4">
                        <div style="min-width: 80%" class="thumbnail">
                        <?php
                        if ($_REQUEST["nume"] == "1") {
                            $_REQUEST["nume"] == "0";
                            echo  "";
                        } else {
                            if ($pagina > 1)
                                $ant = $_REQUEST["nume"] - 1;
                            echo "<a class='btn btn-info' aria-label='Previous' href='index.php?nume=1'><span aria-hidden='true'>&laquo;</span><span class='sr-only'>Previous</span></a>";
                            echo "<li class='page-item '><a class='btn btn-info' href='index.php?nume=" . ($pagina - 1) . "' >" . $ant . "</a></li>";
                        }
                        echo "<li class='active'><a class='btn btn-success' >" . $_REQUEST["nume"] . "</a></li>";
                        $sigui = $_REQUEST["nume"] + 1;
                        $ultima = $num_registros / $registros;
                        if ($ultima == $_REQUEST["nume"] + 1) {
                            $ultima == "";
                        }
                        if ($pagina < $paginas && $paginas > 1)
                            echo "<li class='page-item'><a class='btn btn-info' href='index.php?nume=" . ($pagina + 1) . "'>" . $sigui . "</a></li>";
                        if ($pagina < $paginas && $paginas > 1)
                            echo "
            <li class='page-item'><a class='btn btn-info' aria-label='Next' href='index.php?nume=" . ceil($ultima) . "'><span aria-hidden='true'>&raquo;</span><span class='sr-only'>Next</span></a>
            </li>";
                        ?>
                        </div>
                    </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Panek cierra-->

    </div>
</body>

</html>