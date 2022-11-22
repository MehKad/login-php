<?php
session_start();
if(isset($_POST["username"]) && isset($_POST["password"])){
    if ($_POST["password"] == "123") {
        $_SESSION["username"]= htmlspecialchars($_POST["username"]);
        header("location: index.php");
    }
    else{
        echo "<br>ur password is incorrect<br>";
        
    }
}
?>

<form action="login.php" method="POST">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="username" value="<?php if (isset($_POST["username"])){
        echo $_POST["username"];
    }?>">
    <br><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="password">
    <br><br>
    <input type="submit" value="Login">
</form>
