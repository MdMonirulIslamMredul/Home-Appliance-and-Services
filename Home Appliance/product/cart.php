<?php include 'Head.php'; ?>
<?php 
session_start();
include 'model/db_connect.php';
 $conn = db_conn();

?>

<?php

if (isset($_POST['product_id'], $_POST['quantity']) ) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    
    $stmt = $conn->prepare('SELECT * FROM products WHERE PID = ?');
    $stmt->execute([$_POST['product_id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($product && $quantity > 0) {
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    header('location: cart.php');
    exit;
}


if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    unset($_SESSION['cart'][$_GET['remove']]);
}


if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    header('location: cart.php');
    exit;
}
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: placeorder.php');
    exit;
}

$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
if ($products_in_cart) {
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $conn->prepare('SELECT * FROM products WHERE PID IN (' . $array_to_question_marks . ')');
    $stmt->execute(array_keys($products_in_cart));
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($products as $product) {
        $subtotal += (float)$product['SellingPrice'] * (int)$products_in_cart[$product['PID']];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Single View</title>
    
    <link rel="stylesheet" type="text/css" href="css.css" />
<style>
/*
table {
  width: 100%
}

table, th, td {
    
  border: 1px solid black;
  padding: 15px;
  border-collapse: collapse;
   
}
*/
 
</style>
</head>
<body>
<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul> 
      <?php include 'categoryNav.php' ?>
    </ul>
</div>


<div class="col-6 col-s-6">

        <p>
       <a href="ProductsPage.php" style="font-size :20px"> Back to Products page </a>
       </p>
<div class="cart">
    <h1>Shopping Cart</h1>
    <form action="cart.php" method="post">
        <table>
            <thead>
                <tr>
                    <td >Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td >Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    
                    <td>
                        <a href="cart.php?id=<?=$product['PID']?>"><?=$product['Name']?></a>
                        <br>
                        <a href="cart.php?remove=<?=$product['PID']?>" style="font-size :20px" class="remove">Remove</a>
                    </td>
                    <td class="price">৳ <?=$product['SellingPrice']?></td>
                    <td class="quantity">
                        <input type="number" name="quantity-<?=$product['PID']?>" value="<?=$products_in_cart[$product['PID']]?>" min="1" max="<?=$product['Quantity']?>" placeholder="Quantity" required>
                    </td>
                    <td class="price">৳ <?=$product['SellingPrice'] * $products_in_cart[$product['PID']]?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <span class="price">৳ <?=$subtotal?></span>
        </div>
        <div class="buttons">
            <input type="submit" value="Update" name="update">
            <input type="submit" value="Place Order" name="placeorder">
        </div>
    </form>
</div>
</div>
</div>
<?php include 'foter.php'; ?>
</body>
</html>

