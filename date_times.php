<?php 

//date_default_timezone_set('Asia/Muscat');

echo date_default_timezone_get();

echo "<br>";

echo time();

echo "<br>";

 echo date( "Y-m-d H:i:s", time());

echo "<br>";

// echo date( "Y-m-d H:i:s", time() + 35 * 24 * 60 * 60);

// echo date( "Y-m-d H:i:s", strtotime("+3 months +10 hours"));

// $timestamp = strtotime("1-1-1970", );

echo date("Y-m-d / F / l", strtotime("+10 years", strtotime("1-12-1995")));

echo "<pre>";
print_r(date_diff(date_create("1-1-1995 14:30:00", timezone_open("Asia/Muscat")) , date_create("1-1-2007 16:25:00", timezone_open("Asia/Muscat")  )));