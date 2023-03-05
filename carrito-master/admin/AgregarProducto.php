<?php
include 'Configuracion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registrar Productos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="../../images/favicon.ico" type="image/x-icon">
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
                    <li role="presentation" class="active"><a href="AgregarProducto.php">Nuevo Producto</a></li>
                    <li role="presentation"><a href="ModificarProducto.php">Modificar Producto</a></li>
                    <li role="presentation"><a href="EliminarProducto.php">Eliminar Producto</a></li>
                    <li role="presentation"><a href="historialCompras.php">Historial de Compras</a></li>
                    <li role="presentation"><a href="devolucion.php">Devolución de orden</a></li>
                    <li role="presentation"><a href="../../index2.php">Volver a la página principal</a></li>
                </ul>
            </div>

            <div class="panel-body">
                <h1>Tienda de Productos - REGISTRO</h1>
                </br>
                <!--<a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>-->
                <div id="products" class="row list-group">
                    <form method="POST" action="CRUD.php" enctype="multipart/form-data">
				<div class="form-group">
					<label for="username">Nombre Producto</label>
					<input type="text" name="nombre" placeholder="Nombre del Producto" value= "<?php if(isset($_POST['register'])) { echo $_POST['nombre']; } ?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Descripción</label>
					<input type="text" name="descripcion" placeholder="Descripción del Producto" value= "<?php if(isset($_POST['register'])) { echo $_POST['descripcion']; } ?>"class="form-control" required>
				</div>
				<div class="form-group">
					<label>Precio</label>
					<input type="text" name="precio" placeholder="Precio del Producto" value= "<?php if(isset($_POST['register'])) { echo $_POST['precio']; } ?>"class="form-control" required>
				</div>
                <div class="form-group">
					<label>Foto</label>
					<input type="text" name="foto" required="required">Elige un nombre de foto (tiene que estar en la carpeta)</input>
				</div>
                <div class="form-group">
                    <label for="featured">Destacado</label>
                <select name="featured" id='featured'>
					<option value=1>si</option>
					<option value=0>no</option>
				</select>
				</div>
                <button type="submit" class="btn btn-primary" name="register">Registrar Producto</button>
 			</form>
                </div>
            </div>
        </div>
        <!--Panek cierra-->

    </div>
</body>

</html>