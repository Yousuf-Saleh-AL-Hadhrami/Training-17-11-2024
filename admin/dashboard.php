<?php
 session_start();
 include "./../authorize.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
</head>
<body>
    
<h1>Welcome Admin </h1>
<p>You Are Logged in  As : <?= $_SESSION['name']; ?> </p>
<a href="./../logout.php">Logout</a>

</body>
</html>