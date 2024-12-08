<?php 

require_once "Person.php";
require_once "Student.php";

$person1 = new Person("Yousuf AL Hadhrami","Izki",["Footabll","programming"], 123456);
$student1 = new Student("Yousuf AL Hadhrami","Izki",["Footabll","programming"], 123456, 1175638, 1.7);


echo "<strong style='color:red;'>Data From Class Person </strong> <br>" .$person1->getAllData();
echo "<br>";
echo "<br>";

echo "<strong style='color:red;'>Data From Class Student After Inheritance </strong> <br>" .$student1->getAllData();
