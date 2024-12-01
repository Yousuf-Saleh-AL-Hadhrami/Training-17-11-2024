

<?php 

session_start();

if(isset($_SESSION['is_login']) && $_SESSION['is_login'] === true){

    if($_SESSION['role'] === 'admin') {

    header("location: admin/dashboard.php");
    exit;

} else {

    header("location: user/dashboard.php");
    exit;
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Login</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="username" id="" placeholder="Username"><br>
    <input type="password" name="password" id="" placeholder="Password"><br>
    <input type="submit" value="Login">
</form>


<?php 

include "./dbconnect.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

   $username = $_POST['username'];
   $password = $_POST['password'];

   $query = " SELECT * FROM users WHERE username = '$username' LIMIT 1";
   $result = mysqli_query($connection, $query);
   $user = mysqli_fetch_assoc($result);

   if(!$user){

    echo "Username or Password is incorrect!";

   } else {

    if(password_verify($password, $user["password"])){

     $_SESSION['username'] = $user['username'];
     $_SESSION['name'] = $user['name'];
     $_SESSION['role'] = $user['role'];
     $_SESSION['is_login'] = true;


     if($user['role'] === 'admin') {

     header("location: admin/dashboard.php");
     die();
  
     } else {

        header("location: user/dashboard.php");
        die();
     }

   } else {

    echo "Username or Password is incorrect!";
     
   }

}
}


?>
    
</body>
</html>