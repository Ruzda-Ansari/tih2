  <?php
// Initialize shopping cart class
include_once 'Cart.class.php';
$cart = new Cart;

// Include the database config file
require_once 'connection1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>THE ICING HOUSE</title>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">

<style>

.card-title{
display:block;
}

.card-body{
display:block;
background-color:#cca8e9;
}

.head-prod{
  margin-left:480px;
  color:purple;
}
</style>

</head>

<body>
<div class="container">
    <div class="head-prod">
      <h1>PRODUCTS</h1>
    </div>

    <!-- Cart basket -->
    <div class="cart-view">
        <a href="viewCart.php" title="View Cart"><i class="icart"></i> (<?php echo ($cart->total_items() > 0)?$cart->total_items().'Items in Cart':'Empty'; ?>)</a>
    </div>

    <!-- Product list -->
    <div class="row col-lg-12">
        <?php
        // Get products from database
        $result = $conn->query("SELECT * FROM products ORDER BY id");
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
        ?>
        <div class="card-col-lg-4">
            <div class="card-body">
                <h3 class="card-title"><?php echo $row["name"]; ?></h3>
                <h6 class="card-subtitle mb-2 text-muted">Price: <?php echo 'Rs.'.$row["price"]; ?></h6>
                <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
        <?php } }
        else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
</body>
</html>
