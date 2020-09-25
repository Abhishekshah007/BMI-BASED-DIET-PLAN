<?php



if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'conn.php';
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $age = $_POST["age"];
    $email = $_POST["user_email"];
    $pass = $_POST["user_password"];

    $exists = false;

    if($exists==false){
        $sql = "INSERT INTO `signup` ( `Fname`, `Lname`, `age`, `email`, `password`, `timeStamp`) VALUES ( '$fname', '$lname', '$age', '$email', '$pass', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            
           header("location:../html files/sign-in.php");
        }
    }
    else{
        echo "Passwords do not match";
    }

}

?>