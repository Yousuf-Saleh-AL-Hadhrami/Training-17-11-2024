<?php 

// Indexed Array 
$names = array("Yousuf","Radhya","Sara"); 

echo $names[0][5]; // f
echo "<br>";
echo $names[2][0]; // f


// Associative Array
$countries = [
     "om" => "Oman",
     "uae" => "United Arab Emarates",
     "sa"  => "Saudi Arabia",
     10 => "Number 10",
     true => "Active",
     null => "",
];

echo "<br>";
echo $countries["sa"][1]; // a

echo "<br>";

// Multidieminsional Array
$cities = array(
    ["Nizwa", "Izki", "Sumail"],
    ["Bahla","Manah","Adam"],
    [ ["AL Hamra"] , "Bidbid", "Sinaw"]
);

echo $cities[0][0];

echo "<br>" ;
