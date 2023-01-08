<?php 

    session_start();

    $email = "admin@gmail.com";
    $password = "12345";

    $user_email = $_POST["email"];
    $user_password = $_POST["password"];

    echo "$user_email and $user_password";

    if ($email == $user_email && $password == $user_password){
        $_SESSION["name"] = "Admin";
    }

    header("location:login.php");

    

?>