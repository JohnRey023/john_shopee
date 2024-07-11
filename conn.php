<?php

$db_host = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "shopeetwo";

$conn = new mysqli($db_host,$user_db,$pass_db,$db_name);

if($conn->connect_error){
    echo "Connection Error:" . $conn->connect_error;
}


?>