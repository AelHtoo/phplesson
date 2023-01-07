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
    }

    //ksort()
    echo "<h2>K-sort</h2>";
    ksort($foods);
    foreach ($foods as $key => $food){
        echo "<p>$key => $food</p>";
    }
?>