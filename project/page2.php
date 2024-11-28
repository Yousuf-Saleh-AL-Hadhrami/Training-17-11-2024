<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// if(isset($_GET['id']) && isset($_GET['name'])) {

// echo 'Your Id is ' . $_GET['id'] . " And you Name is : " . $_GET['name'];

// } else {

//     echo "Missing Query Parameter";
// }

$students = [ 

    [ "id" => 10 , "name" => "Yousuf AL Hadhrami"],
    [ "id" => 20,  "name" => "Radhya AL Durie"],
    [ "id"=> 30 ,  "name" => "Sara AL Rashdi"],
];

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
//$name = isset($_GET['name']) ? $_GET['name'] : 'Unknown';

foreach($students as $student){

    if($student["id"] == $id) {

        echo 'Your Id is ' . $student["id"] . " And you Name is : " . $student["name"];

    } else {

        echo "This User Does't Exists";
        break;
    }
}




?>
</body>
</html>