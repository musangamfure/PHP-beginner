<?php


require 'function.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE email= '$email' AND password= '$password' limit 1";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_assoc($result);

        $_SESSION['info'] = $row;

        header('Location: profile.php');

        exit();
        
    }else{
        $error = "Wrong Email or Password";
    } ;


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <?php require_once 'header.php';?>

   <div class="form_cotainer">

   <?php 
   
   if(!empty($error)){
    echo "<p style='text-align: center; padding-bottom: 10px;'>$error</p>";
    }
    
    ?>
    <h2 style="text-align: center; padding-bottom: 10px;">LOG IN</h2>
     <form action="" method="post">
    
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Username" required>
        <button type="submit">Login</button>
    </form>
   </div>

   <?php require_once 'footer.php';?>
</body>
</html>