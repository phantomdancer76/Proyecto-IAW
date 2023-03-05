<?php
include 'Configuracion.php';
session_start();
$idpasada=$_REQUEST['id'];
?>
                    <?php
                        //start session
                        //Incluimos el fichero de configuración para poder conectarnos con la BBDD.
                        include 'Configuracion.php';
                        if(!empty($_REQUEST['id'])){
                            $idpasada=$_REQUEST['id'];
                            $precioreembol=$_REQUEST['precioreembol'];
                            $selectquery = "DELETE FROM orden WHERE id=$idpasada;";
                            $result = mysqli_query($db , $selectquery) or die(mysqli_error($db));
                            echo "<script>alert('orden eliminada correctamente')</script>";
                            header("Location:devolucionExito.php?precioreembol=$precioreembol");
                        } else{
                            echo "<script>alert('no se ha podido seleccionar la id')</script>";
                            header("Location:devolucion.php");
                        }
                    ?>
