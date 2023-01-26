<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid19";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo"Something went wrong";
}
?>