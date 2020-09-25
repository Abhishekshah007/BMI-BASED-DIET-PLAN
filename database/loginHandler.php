<?php

$login = false;
$showError = false;


if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'conn.php';


    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `signup` WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $email;
        header("location:../html files/index.php");

    } 
    else{
        echo "Invalid Credentials";
    }
}

