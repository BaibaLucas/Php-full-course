<?php

/** First page with PhP After xampp started, go to localhost/concepts & open tutorial.php echo **/ 
// "Hi it's my first page with PhP"

/** How to create variable with PhP "$var = value" **/ 

// $str = "Hi it's my first page with PhP";
// $num = 5;
// $float = 7.6;

// echo "<h1>" . $str . "<h1>";
// echo "<h2>" . $num . "<h2>";
// echo "<h3>" . $float . "<h3>";

/** Create Array */
// $laptop_brand = array('HP', "Lenovo", "Asus", "Dell");
// export var
// echo var_dump($laptop_brand);

// define("laptops", ["Hp", "Lenovo and", "Asus"]);
// echo laptops[2];

$var = 4;

if ($var % 2 == 0 && $var % 3 == 0) {
    echo "Divisible by both";
} elseif ($var % 2 == 0) {
    echo "Divisible by 2";
} elseif ($var % 3 == 0) {
    echo "Divisible by 3";
} else { 
    echo "The condition did not meet";
} 

?>