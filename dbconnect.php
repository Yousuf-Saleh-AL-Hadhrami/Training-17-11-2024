<?php 


try { 

    $connection = mysqli_connect("localhost","root","","project");


} catch(Throwable $e) {

    echo $e->getMessage();

}

// PDO => php data obejct 
/*
$sql = " SELECT * FROM users";
$res = mysqli_query( $connection , $sql);
$rows = mysqli_fetch_assoc($res);

echo "<pre>";
var_dump($rows);

*/