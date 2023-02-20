<?php
      //start session
      session_start();
	  include "../olvidopass-master/userAccount.php";
      include "../olvidopass-master/dbConfig.php";
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
<?php
date_default_timezone_set("America/Lima");
// Iniciamos la clase de la carta
include 'La-carta.php';
$cart = new Cart;

// include database configuration file
include 'Configuracion.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
        // get product details
        $query = $db->query("SELECT * FROM mis_productos WHERE id = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'VerCarta.php':'index.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: VerCarta.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['id'])){
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO orden (customer_id, total_price, created, modified) VALUES ('".$_SESSION['id']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        
        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO orden_articulos (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: OrdenExito.php?id=$orderID");
            }else{
                header("Location: Pagos.php");
            }
        }else{
            header("Location: Pagos.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}