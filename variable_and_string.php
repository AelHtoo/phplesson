<?php 

    // Variable
    $name = "Ael Htoo Naw";
    echo $name;
    echo "<br>";
    $address = "Mandalay";
    echo $address;
    echo "<br>";

    // String
    echo "My name is $name <br>";
    echo 'My name is $name <br>';
    echo 'My name is'.$name.'<br>';
    echo $name.'live in' .$address.'<br>';


    $firstName = "Ael";
    $lastName = " Htoo";
    echo $firstName.$lastName;
    echo "<br>";

    $firstName.=$lastName;
    echo $firstName;
    echo "<br>";

    $singer = " May La Than Sin";
    echo 'My favourite singer is'.$singer;
    echo "<br>";
    echo 'My favourite singer is'.trim($singer);
    echo "<br>";
    echo strlen($name);
    echo "<br>";

    echo strtolower("HELLO");
    echo "<br>";
    echo strtoupper("hello");
    echo "<br>";

    echo substr($name,0,3);
    $myCity = "Hello Mandalay";
    echo "<br>";
    echo str_replace("Mandalay", "Smart City" , $myCity);


?>