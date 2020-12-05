<?php
session_start();
?>
<!DOCTYPE HTML>
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



      <!--<hr>-->


      <section id=sec1>
        <div class="first-page">
          <img src="first-page-image.png" width="1300" height="500">
          <div class="explore-button"><a href="#sec2">Explore Now -></a></div>
        </div>
      </section>

      <br><br><br><br><br>


      <section id=sec2>
        <div class="second-page">

          <img class="mySlides" src="second-page-image1.png" style="width:90%">
          <img class="mySlides" src="second-page-image2.png" style="width:90%">
          <img class="mySlides" src="second-page-image3.png" style="width:90%">
          <img class="mySlides" src="second-page-image4.png" style="width:90%">
          <div class="second-page-text">
            <h1>Don't miss out on our new cupcakes <br> Coming Soon ! </h1>
          </div>
        </div>
      </section>


      <br><br><br><br><br>


      <div class="experience-flavours">Experience Flavours</div>

      <div class="third-page1">

        <div class="cupcake">
          <img src="overlay-cupcake.png" class="image">
          <div class="overlay">
            <a href="cupcake.php" class="overlay-button">To Order Freshly Baked Cupcakes <br>
              Click Here !</a>
          </div>
        </div>

        <div class="donut">
          <img src="overlay-donut.png" class="image">
          <div class="overlay">
            <a href="donut.php" class="overlay-button">To Order Freshly Baked Donuts <br>
              Click Here !</a>
          </div>
        </div>

      </div>

      <div class="third-page2">
        <div class="cake">
          <img src="overlay-cake.png" class="image">
          <div class="overlay">
            <a href="cake.php" class="overlay-button">Cakes for all occassions <br>
              Click Here !</a>
          </div>
        </div>

        <div class="icecream">
          <img src="overlay-icecream.png" class="image">
          <div class="overlay">
            <a href="icecream.php" class="overlay-button"> For Yummy Ice-Creams <br>
              Click Here !</a>
          </div>
        </div>

      </div>

      <div class="surprise">
        <img src="overlay-macaron.png" class="image">
        <div class="overlay">
          <a href="surprise.php" class="overlay-button">For more surprises <br> Click Here ! </a>
        </div>
      </div>




      <script>
        var myIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {
            myIndex = 1
          }
          x[myIndex - 1].style.display = "block";
          setTimeout(carousel, 1000); // Change image every 1 seconds
        }
      </script>


    </div>
  </div>
</body>
</html>
