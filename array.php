<?php 

// index array
$laptops = ["MacBook","Dell","Asus","Lenovo","Acer","HP"];
print_r ($laptops);
echo "<h3>$laptops[0]</h3>";
echo "<br>";

$foods = array("Tea","Palatar","Mhonti",27);
print_r($foods);
echo "<br>";

var_dump($foods);
echo "<br>";
var_dump($laptops);
echo "<br>";

//Associative array
$students = [
    "name" => "Mg Mg",
    "email" => "mgmg@gmail.com",
    "phone" => "09771623210",
    "gender" => "Male",
    "dob" => "18/4/2004"
];
print_r($students);
echo "<h3>$students[dob]</h3>";
foreach ($students as $student) {
    echo "<h3>".$student."</h3>";
};

//Multidimensional Array
$restaurant = [
    "breakfast" => ["Mohingar","Nan Gyi Thoke","Kaung Nyin Paung"],
    "lunch" => ["Shan-style rice","Rice and Burmese Curry"],
    "dinner" => ["chapatis and Curry","Kausuetho","Lahpet thouk"],
];
print_r($restaurant);
echo "<br>";
echo $restaurant["breakfast"][0];
echo "<br>";
echo $restaurant["lunch"][1];
echo "<br>";
echo $restaurant["dinner"][2];
echo "<br>";



?>
