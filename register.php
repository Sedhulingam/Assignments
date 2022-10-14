
<?php
require 'config.php';
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $password = $_POST["password"];
    $duplicate = mysqli_query($conn,"SELECT * FROM sess_rl WHERE name = '$name' ");
    if(mysqli_num_rows($duplicate) > 0 ){
        echo
        "<script> alert('Username Has already Available'); </script>";
    }
    else{
        $query = "INSERT INTO sess_rl(name,password) VALUES('$name','$password')";
        mysqli_query($conn,$query);
        echo
        "<script> alert('Registered Successfully'); </script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
    </head>
    <body>
        <h2>Registration</h2>
        <form class="" action="" method="post" autocomplete="off">
            <fieldset>
                <legend>Register</legend>
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" required values=""><br>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password" required values=""><br>
                <button type="submit" name="submit">Register</button>
            </fieldset>
        </form>
        <br>
        <a href="login.php">Login</a>
    </body>
</html>