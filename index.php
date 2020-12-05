<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["first_name"]) {
$logged_in=true;
?>
Welcome <?php echo $_SESSION["first_name"]; ?>.  <br> Go to <a href="indexpage.php">Home Page.</a>


<?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>
