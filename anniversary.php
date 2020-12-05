<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>THE ICING HOUSE</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@800&display=swap" rel="stylesheet">
  <link rel="icon" href="favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>


<body>
  <div class="header">
    <div class="container">


      <div class="navbar">
        <div class="left-side">
          <table>
            <tr>
              <td><img src="logo.png" width="100px" height="80px"></td>
              <td>
                <div class="logo-name">The Icing House <p>Baker's Corner </p>
                </div>
              </td>
            </tr>
          </table>
        </div>

        <div class="right-side">
          <div class="right"><a href="indexpage.php">Home</a></div>

          <div class="dropdown">
            <div class="right"><a href>Products</a></div>
            <div class="dropdown-content">
            <a href="cupcake.php">Cupcakes</a>
            <a href="cake.php">Cakes</a>
            <a href="donut.php">Donuts</a>
            <a href="icecream.php">Ice-Creams</a>
            <a href="surprise.php">Surprise Me</a>
            </div>
          </div>

          <div class="right"><a href="about.php">About Us</a></div>

          <div class="right"><a href="order.php">Made To Order</a></div>

          <div class="dropdown">
            <div class="right"><a href>Account</a></div>
            <div class="dropdown-content">
              <?php
              if(isset($_SESSION["id"]) && $_SESSION["id"]!=''){?>
                <a href="logout.php">Logout</a>
            <?php  }else{?>
                <a href="loginpage.php">Login</a>
                <a href="register.php">Register</a>
            <?php  }?>

            </div>
          </div>

          <div class="right">
            <a href="cartAction.php">
            <img src="ShoppingBag.png" width="20px" height="20px" href='cartAction.php'>
            </a>
          </div>
        </div>
      </div>


      <div class="product-page-cake">

        <div class="left-links">
          <a href="kid.php" class="cake-link">Kids</a><br><br><br>
          <a href="birthday.php" class="cake-link">Birthdays</a><br><br><br>
          <a href="wedding.php" class="cake-link">Weddings</a><br><br><br>
          <a href="anniversary.php" class="cake-link">Anniversary</a><br><br><br>

          <a href="cake.php" class="cake-link">Offers</a>

        </div>

        <div class="right-cake">
          <div class="product1">
            <div class="img"><img src="anni1.jpeg" alt=""><br>Rs.500<br><a href="cartAction.php" action='addToCart' id='31' name='Red Velvet Anniversary Cake' class="btn">Add to Cart</a></div>
            <div class="img"><img src="anni2.jpeg" alt=""><br>Rs.600<br><a href="cartAction.php" action='addToCart' id='32' name='Vanilla Anniversary Cake' class="btn">Add to Cart</a></div>
            <div class="img"><img src="anni3.jpeg" alt=""><br>Rs.700<br><a href="cartAction.php" action='addToCart' id='33' name='Chocolate Anniversary Cake' class="btn">Add to Cart</a></div>
          </div>
          <div class="product2">
            <div class="img"><img src="anni4.jpeg" alt=""><br>Rs.1200<br><a href="cartAction.php" action='addToCart' id='34' name='Starwberry Anniversary Cake' class="btn">Add to Cart</a></div>
            <div class="img"><img src="anni5.jpeg" alt=""><br>Rs.700<br><a href="cartAction.php" action='addToCart' id='35' name='Floral Anniversary Cake' class="btn">Add to Cart</a></div>
            <div class="img"><img src="anni6.jpeg" alt=""><br>Rs.900<br><a href="cartAction.php" action='addToCart' id='36' name='Cream Anniversary Cake' class="btn">Add to Cart</a></div>
          </div>
        </div>



      </div>




    </div>
  </div>
</body>

</html>
