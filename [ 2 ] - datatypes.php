<?php 

$age = 30;  // Integer
$name = "Salim"; // String
$salary = 505.50; // Float || Double 
$status = true; // Boolean
$count = null;  // null 
$fruits = array("Apple","Orange","Banana"); // [] shorthand Array

class Person {

}

$person1 = new Person(); // object 

//echo gettype($name); // To get the data type 

is_integer($age);
is_float($salary);
is_double($salary);
is_null($status);
is_string($count);
is_array($fruits);
is_object($person1);

var_dump($name);






