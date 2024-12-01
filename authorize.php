<?php 

if(!isset($_SESSION['username'])){

    if($_SESSION['role'] === 'admin') {

    header("location: ./../login.php");
    exit();
} else {
    
}
}