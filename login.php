
<?php
require 'config.php';
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $password = $_POST["password"];
    $result = mysqli_query($conn,"SELECT * FROM sess_rl WHERE name='$name'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if(($password == $row["password"]) and ($name == $row["name"])) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }
    }
    else{
        echo
        "<script> alert('Login failed!!');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
        <fieldset>
            <legend>Login</legend>
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" required value=""><br>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required value=""><br>
            <button type="submit" name="submit">Login</button>
        </fieldset>
    </form>
    <br>
    <a href="register.php">Register</a>
</body>
</html>