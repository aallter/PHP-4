<?php
session_start();
require_once "connect.php";
if (isset($_SESSION['login'])){
    if(isset($_POST['logout'])){
        unset($_SESSION['login']);
        header("Location: index.php");
    }
    $login = $_SESSION['login'];
    $query = "SELECT * FROM users WHERE login ='$login'";
    $result = mysqli_query($link,$query);
    $arr = mysqli_fetch_assoc($result);
}else{
    exit("Not date");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1><?php echo "HI ".$_SESSION['login']; ?></h1>
<br><a href="Search.php">Search</a>
<form action="" method="post">
    <input type="submit" name="logout" value="Exit"></form>
<p><a href="Edit.php?get=<?= $arr['id']?>">Edit Profile</a></p>
</body>
</html>
