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
    <title>
        BMI
    </title>
    <link rel="stylesheet" href="../css files/instyle.css" />
    <link rel="stylesheet" href="../css files/checkbmi.css">

    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />


</head>

<body>
    <ion-app>

        <ion-content>
            <div class="logo">
                <img src="../img/bmi.jpg" />
                
                <?php
                if($a){
                    echo '<a href="./logout.php" style="margin-right:30px ;">Log-out</a>';
                }
                else {
                    echo '<a href="./sign-up.php" style="margin-right:30px ;">Sign-in</a>';
                }
                ?>
            </div>
            <div class="navbar">
                <div class="menu">
                    <nav class="links">
                        <ul>
                            <!-- <li><a href="./index.php">Feed</a></li> -->
                            <li><a href="./index.php">Check BMI</a></li>
                            <li><a href="./dietPlan.php">Diet Plan</a></li>
                            <li><a href="./compare.php">Compare</a></li>
                            <li><a href="./About.php">About</a></li>
                            <li><a href="./profile.php">Profile</a></li>
                        </ul>
                    </nav>
                </div>
            </div>


            <div class="a">

                <form class="credit-card">
                    <div class="form-header">
                        <h4 class="title">Check Your BMI</h4>
                    </div>



                    <div class="form-body">

                    <form action="" method="post">

                        <p class="a1">Enter your Age:</p>

                        <input type="number" id="age" max="100" min="15"  class="card-number" placeholder="Age">

                        <p class="a2">Enter your Height(ft/in):</p>

                        <input type="text" id="b2" min="4.0" max="7.0" name="height" class="card-number" placeholder="Height">

                        <p class="a3">Enter your Weight(kg/g):</p>

                        <input type="text" id="b3" min="40" max="150" name="weight" class="card-number" placeholder="Weight">


                        <!-- Buttons -->
                        <ion-button id="btn">Result</ion-button>
                        </form>
                        <ion-card>

                            <ion-list id="m_bmi"></ion-list>
                            <ion-button id="d_plan"  onclick="unhide()">Get Diet Plan</ion-button>

                        </ion-card>
                    </div>



                </form>
            </div>
            <br>
            <br>


            <div class="pb">
                <span>To improved well being</span>
                <br>
                <p style="font-size: medium;"> possible to lower your BMI as you lower your weight. Many standard
                    weight-loss
                    tips apply for lowering your BMI.
                    This includes:</p>
                <ul>
                    <li>Eat healthy. Consumer fewer calories, choose lean meats, fruits, vegetables, and whole grains.
                        Reduce
                        alcohol, sugar,
                        processed foods, sodas, and juices.</li>
                    <li> regularly. This includes cardio and weight-bearing exercises to build muscle and lose fat. This
                        is
                        effective in
                        controlling belly fat. Belly fat increases the risk of certain health conditions.
                    </li>
                    <li>Be mindful of portion control. Don’t overeat during meals and snacks.
                        Talk to your doctor about ways to lower your BMI or lose weight.</li>
            </div>
            <br><br>
            <img src="../img/bmi.png" alt="" srcset="" class="center">
        </ion-content>

    </ion-app>

    <script src="../js files/check.js"></script>

</body>

</html>