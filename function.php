<?php 

//function
function myName(){
    echo "<h1>Ael Htoo Naw</h1>";
}
myName();

//function with Argument
$brother = "Aung Aung";
function myBrother($name){
    echo "<h1>My Brother name is $name</h1>";
}
myBrother($brother);

$x = 10;
$y = 20;
function add($num1,$num2){
    $result = $num1 + $num2;
    echo "<h2>Adding result is $result</h2>";
}
add($x, $y);

$numbers = [23,32];
function myArray($num){
    $res = $num[1] - $num[0];
    echo "<h2>Sub result is $res.</h2>";
}
myArray($numbers);

$n = 30;
function myNumber($number = 50){
    echo "<h2>My Number is $number.</h2>";
}
myNumber();
myNumber($n);


?>