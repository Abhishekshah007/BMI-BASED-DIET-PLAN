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
  <!-- <script src="../js files/db.js"></script> -->
</head>

<body>
  <div class="logo"><img src="../img/bmi.jpg" /><a href="./sign-in.php" style="margin-right:30px ;">Sign In</a></div>
  <div id="welcome" class="panel">
  <?php
  $showAlert = false;
  
  if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    <form action="../database/signupHandler.php" method="POST">
      <h1>Sign Up</h1>
      <fieldset>
        <legend>Your basic info :</legend>
        <label for="name">First Name:</label>
        <input type="text" id="fname" name="first_name">
        <label for="name">Last Name:</label>
        <input type="text" id="lname" name="last_name">
        <label>Age:</label>
        <input type="number" id="age" name="age" aria-placeholder="Age"></input>
      
      <label for="mail">Email:</label>
      <input type="email" id="email" name="user_email" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="user_password" required></fieldset>
      </fieldset>
      <button id="lbtn" type="submit">
        Sign Up
      </button>
      <button class="button" type="button" id="login"><a href="sign-in.php">Sign in </a></button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>