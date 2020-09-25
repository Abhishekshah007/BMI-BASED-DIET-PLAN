<?php

$server = "localhost";
$username = "root";

$password = "";
$database = "user_auth";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";

    die("Error". mysqli_connect_error());
}




?>