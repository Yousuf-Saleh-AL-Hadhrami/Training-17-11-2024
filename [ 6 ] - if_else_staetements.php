<?php 

$value = 10;

if($value > 10 ){

    echo "excellent";
    
} else if($value == 10 ){

   echo "very good";

} else {

    echo "good";
}

echo "<br>";
echo "==========================";
echo "<br>";



// Ternary if operator 

$y = 20;

echo $y === 20 ? "Yes" : "No";

echo "<br>";

$z = 10;

// Null Colleascing operator 
echo 10 ?? null ;

