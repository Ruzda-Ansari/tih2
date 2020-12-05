<?php
// Include the database config file
require_once 'connection1.php';

// Initialize shopping cart class
include_once 'Cart.class.php';
$cart = new Cart;

// If the cart is empty, redirect to the products page
if($cart->total_items() <= 0){
    header("Location: indexcart.php");
}

// Get posted data from session
$postData = !empty($_Sindexcart.phpostData)?$_SESSION['postData']:array();
unset($_SESSION['postData']);

// Get status message from session
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>THE ICING HOUSE</title>
<meta charset="utf-8">

<style>
.heading{
  margin-left:480px;
  color:#2d4059;
}
.btn-btn-block-btn-info{
  border: #a6e3e9;
  color:black;
  text-decoration:none;
  background-color:#a6e3e9;
  padding:5px;
  transition:color 0.1s;
  margin-left:40px;
}
.btn-btn-block-btn-info:hover{
  color:#71c9ce;
}
.container{
  background-color:#c3bef0;
  padding:40px;
}
input[type=text], select {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=email], select {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>

</head>
<body>
<div class="container">

  <div class="heading">
      <h1>CHECKOUT</h1>
  </div>


    <div class="col-12">
        <div class="checkout">
            <div class="row">
                <?php if(!empty($statusMsg) && ($statusMsgType == 'success')){ ?>
                <div class="col-md-12">
                    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                </div>
                <?php } elseif(!empty($statusMsg) && ($statusMsgType == 'error')){ ?>
                <div class="col-md-12">
                    <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
                </div>
                <?php } ?>

                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your Cart:</span>
                        <span class="badge badge-secondary badge-pill"><?php echo $cart->total_items(); ?></span>
                    </h4>
                    <ol type="1"  class="list-group mb-3">
                        <?php
                        if($cart->total_items() > 0){
                            //get cart items from session
                            $cartItems = $cart->contents();
                            foreach($cartItems as $item){
                        ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h3 class="my-0"><?php echo $item["name"]; ?></h3>
                                <small class="text-muted"><?php echo 'Rs.'.$item["price"]; ?>(<?php echo $item["qty"]; ?>)</small>
                            </div>
                            <span class="text-muted"><?php echo 'Subtotal: Rs.'.$item["subtotal"]; ?></span>
                        </li>
                        <?php } } ?>
                        <br>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (Rs)</span>
                            <strong><?php echo 'Rs.'.$cart->total(); ?></strong>
                        </li>
                    </ol>
                    <a href="indexcart.php" class="btn-btn-block-btn-info">Add Items</a>
                </div>
                <br><br>
                <div class="col-md-8 order-md-1">
                    <h1 class="mb-3">Contact Details</h1>
                    <form method="post" action="cartAction.php">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="first_name" value="<?php echo !empty($postData['first_name'])?$postData['first_name']:''; ?>" required>
                            </div>
                            <br>
                            <div class="col-md-6 mb-3">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="<?php echo !empty($postData['last_name'])?$postData['last_name']:''; ?>" required>
                            </div>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="email">Email- ID</label>
                            <input type="email" class="form-control" name="email" value="<?php echo !empty($postData['email']) ? $postData['email']:''; ?>" required>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="phone">Phone No .</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo !empty($postData['phone']) ? $postData['phone']:''; ?>" required>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="address">Address </label>
                            <input type="text" class="form-control" name="address" value="<?php echo ($postData['address']!='') ? $postData['address'] : ''; ?>" required>
                        </div>
                        <br>
                        <input type="hidden" name="action" value="placeOrder"/>
                        <input class="btn btn-success btn-lg btn-block" type="submit" name="checkoutSubmit" value="Place Order">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
