<?php

require 'function.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = addslashes($_POST['name']) ;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = date('Y-m-d H:i:s');

    $query = "INSERT INTO users(username, email, password, date) VALUES('$username', '$email', '$password', '$date')";

    $result = mysqli_query($conn, $query);

    header('Location: login.php');

    exit();

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <?php require_once 'header.php';?>

   <div class="form_cotainer">
    <h2 style="text-align: center; padding-bottom: 10px;">SIGN UP</h2>
     <form action="" method="post">
        <input type="text" name="name" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Username" required>
        <button type="submit">Sign Up</button>
    </form>
   </div>

   <?php require_once 'footer.php';?>
</body>
</html>