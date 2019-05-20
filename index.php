<?php

// 0 or 1  
$b0 = rand(0, 1); 

// 0 or 1 
$b1 = rand(0, 1);

// 0 or 1 
$b2 = rand(0, 1);

// 0 or 1 
$b3 = rand(0, 1);

// 0 or 1 
$b4 = rand(0, 1); 

// 0 or 1  
$b5 = rand(0, 1);

// 0 or 1
$b6 = rand(0, 1);

// 0 or 1 
$b7 = rand(0, 1);

$res = "$b0$b1$b2$b3$b4$b5$b6$b7";

echo '<h1>Binary Generator</h1>';

echo "<div class='card-header'>$res</div>";

echo '<h4>Binary to Decimal Converter</h4>';

// Converts Binary to Decimal
echo bindec(''.$res.'');

// or

// echo bindec($res);

?>
