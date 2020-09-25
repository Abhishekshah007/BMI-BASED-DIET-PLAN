<?php


 $a=true;

 require_once '../database/conn.php';

 session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true){
     $a=false;
    header("location: sign-in.php");
    exit;
}

?>
<html>
        <head>
            <link rel="stylesheet" href="../css files/instyle.css" />
            <link rel="stylesheet" href="../css files/profile.css">
            <script src="../js files/check.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>
    <div class="logo">
        <img src="../img/bmi.jpg" />
        <a href="./logout.php" style="margin-right:30px ;">Log-Out</a>
    </div>
    <div class="navbar">
        <div class="menu">
            <nav class="links">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./index.php">Check BMI</a></li>
                    <li><a href="./dietPlan.php">Diet Plan</a></li>
                    <li><a href="./compare.php">Compare</a></li>
                    <li><a href="./About.php">About</a></li>
                    <li><a href="./profile.php">Profile</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="prof">
    <h2 class="pt"> User Profile</h2>

    <div class="card">
        <img src="../img/hhh.png" alt="John" style="width:100%">

        <?php


    // $value = $_GET["result1"];
    // $profile_viewer_uid = $_POST['profile_viewer_uid'];

    
        
       echo '<h1>John</h1>';
       echo '<p class="title">Doe</p>';
        echo '<p class="title">Current BMI: 28.757</p>';
        echo '<p class="title">Diet Plan: ongoing </p>';


// }
// else {
//     echo '<h1>XYZ</h1>';
//     echo '<p class="title">XX</p>';
//      echo '<p class="title"></p>';
//      echo '<p class="title">Diet Plan: ongoing </p>';
// }

        ?>

        <div style="margin: 24px 0;">

        </div>
        <p><button>Healthy</button></p>
    </div>
    </div>
    </body>
    </html>