<?php 

    setcookie("age","18",time()+3600);

    if (isset($_COOKIE["age"])){
        if ($_COOKIE["age"] == "18"){
            echo "You can buy.";
        }else{
            echo "You can't buy.";
        }
    }

?>