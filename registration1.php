<?php
 include('connection1.php');
 if(isset($_POST['save']))
 {
   $first_name=$_POST["first_name"];
   $last_name=$_POST["last_name"];
   $email=$_POST["email"];
   $phone=$_POST["phone"];
   $address=$_POST["address"];
   $pass=$_POST["pass"];


     $sql="insert into customers (first_name,last_name,email,phone,address,pass) values ('$first_name','$last_name','$email','$phone','$address','$pass')";
     $res=mysqli_query($conn,$sql);
     if($res)
     {
     echo "Record successfully inserted";
     }
     else
     {
     echo "There is some problem in inserting record";
     }

}
?>
