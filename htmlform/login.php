<?php
session_start();
require('connect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = "SELECT * FROM login WHERE email='$email' AND password='$password' ";
    $result = mysqli_query($conn,$user);
    if(mysqli_num_rows($result)==1){
        echo "<h3>Successfully logged in</h3>";
    }
    else{
        echo "<h3>Invalid user</h3>";
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <br>
    <br><br>
    <div class="con1">
    
        <h2 class="signup">Login Form</h2>
        <div class="row">
        
            <div class="col-md-6 text">
                <form action="" method="POST">
                <div class="name1">
                    <label for="email">
                        <i class="zmdi zmdi-email"></i>
                        <input type="email" name="email" placeholder="Your Email" required>
                    </label>
                </div>
                <div class="name1">
                    <label for="password">
                        <i class="zmdi zmdi-lock"></i>
                        <input type="text" name="password" placeholder="password" required>
                    </label>
                </div>
               
                <button class="btn btn-primary" value="Submit" type="submit" name="submit" style="height:40px;width:100px;border-radius: 5px;background-color:rgb(126, 175, 231)">submit</button> New User??<a href="registration.php">Register here</a>
            </form>
            </div>
           
       
        <div class="col-md-4">
            <img  class="image"  src="https://image.freepik.com/free-vector/work-time-concept-illustration_203587-39.jpg">
        </div>
        </div>
    </div>
</body>
</html>