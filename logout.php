<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["yourName"]);
$logged_in=false;
header("Location:indexpage.php");
?>
