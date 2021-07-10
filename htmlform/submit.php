<?php
require_once('connect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $user = "INSERT INTO  login (name, password, email, phone) VALUES ('$name', '$password', '$email','$phone')";
    if(mysqli_query($conn,$user)){
    echo "<h2 style=color:green;padding-left:70px;margin-top:40px;> Successfully registered </h2>";
    echo "<h3>Name  - {$name}</h3>";
    echo  "<h3>password - {$password}</h3>";
    echo "<h3>email - {$email}</h3>";
    echo "<h3>phone - {$phone}</h3>";}
    else{
        "not successfull";
    }
}
?>
<!DOCTYPE html>
<head>
</head>
<style>
h3{
    color:black;
    margin-left:140px;
}</style>
<body>

</body>
</html>