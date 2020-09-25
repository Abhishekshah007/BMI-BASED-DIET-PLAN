
<?php

include '../database/conn.php';
require_once '../database/session.php';
?>

<html>

<head>
    <title>Auth</title>
    <link rel="stylesheet" href="../css files/silo.css" />
    <link rel="stylesheet" href="../css files/instyle.css" />
    <link rel="stylesheet" href="../css files/checkbmi.css">
    <script src="../js files/siso.js"></script>
    <script src="../js files/db.js"></script>
</head>

<body>

    <div class="logo">
        <img src="../img/bmi.jpg" />
        <a href="./sign-up.php" style="margin-right:30px ;">Sign Up</a>
    </div>
    <!-- <div class="navbar">
        <div class="menu">
            <nav class="links">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./checkBmi.php">Check BMI</a></li>
                    <li><a href="./dietPlan.php">Diet Plan</a></li>
                    <li><a href="./compare.php">Compare</a></li>
                    <li><a href="./About.php">About</a></li>
                    <li><a href="./profile.php">Profile</a></li>
                </ul>
            </nav>
        </div>
    </div> -->

    <div id="awesome" class="panel">
        <form action="../database/loginHandler.php"  method="POST">

            <h3>Sign-in</h3>

            <fieldset>

                <label for="mail">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="mail">Password:</label>
                <input type="password" id="mail" name="pass" require>
                <p><a href="forget.php">Forget credential ?</a></p>
                <button id="s_btn" type="submit">Sign in</button>

            </fieldset>
        </form>
    </div>
    
</body>

</html>