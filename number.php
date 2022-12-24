<?php 

$num1 = 300;
$num2 = 300;
$num3 = 32.45;
echo gettype($num3);
echo "<br>";

$num1++;
echo $num1;
echo "<br>";
echo gettype($num1);
echo "<br>";

// + - * / %
// < <= > >= == === != !==

$add = $num1 + $num2;
$sub = $num2 - $num1;
$mul = $num1 * $num2;
$div = $num2 / $num1;
$rem = $num2 % $num1;
echo "$add and $sub and $mul and $div and $rem";


?>