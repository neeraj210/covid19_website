<?php
include "connection.php";

if($email === $password){
    echo "Login sucessful";
}
else {
    echo "login failed";
}

?>