<?php
// Initialize shopping cart class
include_once 'Cart.class.php';
$cart = new Cart;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>THE ICING HOUSE</title>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">
<style>
table{
  border-collapse:collapse;
}
table tr:hover{
  background-color:#cfd3ce;
}
.heading{
  color:#07689f;
  margin-left:480px;
}
body{
  background-color:#dde7f2;
}
</style>

<script>
function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>
</head>
<body>
<div class="container">
  <div class='heading'>
    <h1>SHOPPING CART</h1>
  </div>
    <div class="row">
        <div class="cart">
            <div class="col-12">
                <div class="table-responsive">
                    <table border="1px" class="table table-striped">
                        <thead>
                            <tr>
                                <th width="45%">Product</th>
                                <th width="10%">Price</th>
                                <th width="15%">Quantity</th>
                                <th class="text-right" width="20%">Total</th>
                                <th width="10%"> Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if($cart->total_items() > 0){
                                // Get cart items from session
                                $cartItems = $cart->contents();
                                foreach($cartItems as $item){
                            ?>
                            <tr>
                                <td><?php echo $item["name"]; ?></td>
                                <td><?php echo 'Rs.'.$item["price"]; ?></td>
                                <td><input class="form-control" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/></td>
                                <td class="text-right"><?php echo 'Rs.'.$item["subtotal"]; ?></td>
                                <td class="text-right"><button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;"><i class="itrash"></i> </button> </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="5"><p>Your cart is empty.....</p></td>
                            <?php } ?>
                            <?php if($cart->total_items() > 0){ ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><strong>Cart Total</strong></td>
                                <td class="text-right"><strong><?php echo 'Rs.'.$cart->total(); ?></strong></td>
                                <td></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

<br><br>

            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="indexcart.php" class="btn btn-block btn-light">Continue Shopping </a>
                    </div>

<br>

                    <div class="col-sm-12 col-md-6 text-right">
                        <?php if($cart->total_items() > 0){ ?>
                        <a href="checkout.php" class="btn btn-lg btn-block btn-primary">Checkout</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
