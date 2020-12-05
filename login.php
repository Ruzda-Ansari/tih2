<?php
session_start();
$message="";
if(count($_POST)>0) {
 include('connection1.php');
$result = mysqli_query($conn,"SELECT * FROM customers WHERE email='" . $_POST["email"] . "' and pass = '". $_POST["pass"]."'");
$row  = mysqli_fetch_array($result);

if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["first_name"] = $row['first_name'];
header("Location:index.php");
} else {
echo "Invalid Email-ID or Password!";
}
}

/*
if(isset($_SESSION["id"])) {

}
?>*/
