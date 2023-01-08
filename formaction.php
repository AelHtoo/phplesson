<?php 

    //Global Variable
    //$_GET,$_POST,$_COOKIE,$_REQUEST,$_SESSION,$_FILES

    var_dump($_REQUEST);
    echo "<br>";
    echo $_REQUEST["email"];
    echo "<br>";
    echo $_REQUEST["password"];

    $email = $_POST["email"];
    $password = $_POST["password"];
    echo "<p>Email is $email and Password is $password.</p>";

?>