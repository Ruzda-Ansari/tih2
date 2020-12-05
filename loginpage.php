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


       <div class="f">
         <form method="post" action="login.php">
      <!-- <div class="message"><?php if($message!="") { echo $message; }?> </div> -->
         <h3 align="center">Enter Login Details</h3>
          E-mail:<br>
          <input type="text" name="email">
          <br>
          Password:<br>
         <input type="password" name="pass">
         <br><br>


         <input type="submit" name="login_save" value="Submit">
         <input type="reset">
       </div>





    </div>
  </div>
</body>

</html>
