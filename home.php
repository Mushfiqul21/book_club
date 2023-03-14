<?php
 if(isset($_POST['submit']))
 {
     $username = $_POST['username'];  
     $password = $_POST['password'];

     $connect = new mysqli("localhost","root","","mushfiq");

     $sql = "SELECT * FROM loginform WHERE username = '".$username."' AND password = '".$password."'"; 

     $result = mysqli_query($connect,$sql);
     $found = mysqli_num_rows($result);

     if($found == 1)
     {
        header("location:option.php");
     }
     else{
        echo "Wrong username or password. Try again.....";
     }
 }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Book Shop</title>
</head>
<body>
    <section class="full">
        <div class="main">
        <h1 style=" font-style:italic;">SIGN IN HERE TO ENTER BOOKCLUB</h1>
           <div class="login">
           <form action="" method="post">
                <div>
                <div class="custom-inputs">
         <input class="i-design" type="text" name="username" placeholder="Enter Your Username">
</div>
<div class="custom-inputs">
    <input class="i-design" type="password" name="password" placeholder="Enter Your Password">
</div>
<div class="custom-inputs">
    <input class="btn-design" type="submit" name="submit" value="Login">
</div>
                </div>
            </form>
           </div>
        </div>
    </section>
 
</body>
</html>