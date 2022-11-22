<?php
session_start();

if(isset($_GET["logout"])){
    unset($_SESSION["username"]);
}


if(!array_key_exists("username" , $_SESSION))
header("Location:login.php");

else echo "<h1>Bonjour ".$_SESSION["username"]."</h1>";
session_destroy();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/login/login.php" id="logout" name="logout">logout</a>
</body>
</html>
