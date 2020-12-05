	<?php
	//echo "testing";
		   $servername = "localhost";
	     $username = "gk";
	     $password = "Ghazala6";
		   $database="ghazala";
	     $conn = new mysqli($servername,$username,$password,$database) or die('die');

	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	} 

	?>
