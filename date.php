<?php 

    echo "<h1>Date</h1>";
    echo "<p>Today is ".date("Y-m-d")."</p>";
    echo "<p>Today is ".date("d-m-Y")."</p>";
    echo "<p>Today is ".date("Y/m/d")."</p>";
    echo "<p>Today is ".date("d.m.Y")."</p>";
    echo "<p>Today is ".date("d M Y")."</p>";
    echo "<p>Today is ".date("l")."</p>";

    echo "<h1>Time</h1>";
    echo "<p>Time is ".date("h:i:sa")."</p>";
    echo date_default_timezone_get();

    date_default_timezone_set('Asia/Yangon');
    echo "<p>Yangon Time is ".date("h:i:sa")."</p>";

    date_default_timezone_set('Asia/Bangkok');
    echo "<p>Bangkok Time is ".date("h:i:sa")."</p>";

    echo "<h1>String to time </h1>";
    $tomorrow = strtotime("tomorrow");
    echo $tomorrow;
    echo "<p>Tomorrow is ".date("Y-m-d",$tomorrow)."</p>";
    $next_sat = strtotime('next Saturday');
    echo $next_sat;
    echo "<p>Next Saturday is ".date("Y/m/d",$next_sat)."</p>"

?>