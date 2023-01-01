<?php 

    $a = 0;
    $b = 0;

    for ($i=0; $i < 15; $i++) { 
        $a += 10;
        $b += 5;
    }
    echo "<h3>The Looping end is a = $a and b = $b</h3>";

    $k = 0;
    $n = 50;
    while ($k < 10) {
        $n--;
        $k++;
    }
    echo "<h3>Looping stop at k = $k and n = $n</h3>";

    $j = 0;
    $num = 50;
    do {
        $j ++;
        $num ++;
    } while ($j < 10);
    echo "<h3>Looping stop at j = $j and num = $num</h3>";

    $programmings = ['Javascript','PHP','Python','Dark','C++','Java','C#','Ruby'];
    print_r($programmings);
    echo "<br><br>";
    echo $programmings[1];

    foreach ($programmings as $programming){
        echo "<h3>Programming Language is $programming</h3>";
    }

?>