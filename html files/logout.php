<?php 

session_start();

if (session_destroy()) {

header("location:../html files/sign-in.php");
exit;
}

?>