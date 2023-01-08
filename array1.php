<?php 

    //sort()
    echo "<h2>Sort A to Z</h2>";
    $pls = ["Javascript", "PHP", "Dark", "C#", "C++","Java"];
    sort($pls);
    foreach ($pls as $pl) {
        echo "<p>$pl</p>";
    };

    echo "<h2>Sort Z to A</h2>";
    rsort($pls);
    foreach ($pls as $pl) {
        echo "<p>$pl</p>";
    };
    
    //asort()
    echo "<h2>A-sort</h2>";
    $foods = [
        "breakfast" => "Mohingar",
        "lunch" => "Burmese rice and curry",
        "dinner" => "Mala Xianguo",
    ];

    asort($foods);
    foreach ($foods as $food){
        echo "<p>$food</p>";
    };

    //ksort()
    echo "<h2>K-sort</h2>";
    ksort($foods);
    foreach ($foods as $key => $food){
        echo "<p>$key => $food</p>";
    };

    //arsort()
    echo "<h2>Ar-sort</h2>";
    arsort($foods);
    foreach ($foods as $food){
        echo "<p>$food</p>";
    };

    //krsort()
    echo "<h2>Kr-sort</h2>";
    krsort($foods);
    foreach ($foods as $key => $food){
        echo "<p>$key => $food</p>";
    };

    $colors = ["Red","Green","Blue","Black","White"];
    print_r($colors);
    echo "<br>";
    array_push($colors,"Pink","Yellow");
    print_r($colors);
    echo "<br>";

    array_pop($colors);
    print_r($colors);
    echo "<br>";

    unset($colors[2]);
    print_r($colors);
    echo "<br>";

    //Array to string
    $actors = ["Daung","Pyay Ti Oo","Lu Min","Thet Mon Myint","Eaindra Kyaw Zin"];
    echo gettype($actors);
    echo "<br>";
    $actors_str = implode("/",$actors);
    echo "<p>$actors_str</p>";

    //string to array
    $actors_arr = explode("/",$actors_str);
    print_r($actors_arr);

?>