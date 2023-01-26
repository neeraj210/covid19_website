<?php
include "connection.php";


$email = $_POST['email'];
$password = $_POST['psw'];
$confirm_password = $_POST['repsw'];



if ($password === $confirm_password ) {
 
  $query = "INSERT INTO `userlogin`( `email`, `psw`) VALUES ('$email','$password')";
  if( mysqli_query($conn,$query)){

  echo "SUCESS";

   
 }else{
  echo "FAILD";
  
 }

 
}else{
  echo "500";
  
}


// $sql = "INSERT INTO userlogin (email, psw, repsw)
// VALUES ('$email', '$psw', '$repsw')";

// mysqli_query($conn, $sql);

// $conn->close();
?> 


