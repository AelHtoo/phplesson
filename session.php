<?php 

    session_start();

    $_SESSION["name"] = "Ael Htoo Naw";
    $_SESSION["email"] = "alhtoonaw@gmail.com";

    if (isset($_SESSION["name"]) && isset($_SESSION["email"])) {
        echo "<h1>My name is ".$_SESSION["name"]."</h1>";
        echo "<h1>My email is ".$_SESSION["email"]."</h1>";
    }else{
        echo "<h1>Empty data</h1>";
    }
?>