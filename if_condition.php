<?php 

    //condition

    //one condition

    $x = 10;
    $y = 10;

    if ($x == $y) {
        echo "<h3>X is equal to Y</h3>";
    }

    //Two condition

    date_default_timezone_set('Asia/Yangon');
    $day = date('d');
    $month = date('m');
    echo "$day and $month";

    if ($day == 25 && $month == 12) {
        echo "<h3>Merry Christmas</h3>";
    }else{
        echo "<h3>Normal Day</h3>";
    }

    //Many Condition

    $d = date('D');
    echo $d;

    if ($d == "Mon") {
        echo "<h3>Today is Monday</h3>";
    }else if($d == 'Sat'){
        echo "<h3>Today is Saturday</h3>";
    }else if($d == 'Tue'){
        echo "<h3>Today is Tuesday</h3>";
    }else if($d == 'Wed'){
        echo "<h3>Today is Wednesday</h3>";
    }else if($d == 'Thu'){
        echo "<h3>Today is Thurday</h3>";
    }else if($d == 'Fri'){
        echo "<h3>Today is Friday</h3>";
    }else if($d == 'Sun'){
        echo "<h3>Today is Sunday</h3>";
    }

?>