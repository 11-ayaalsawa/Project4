<?php

if(isset($_POST['submit'])){
session_start();
$email=$_SESSION['email'];
$pass=$_SESSION['password'];

if ( ($_POST['password'] == $pass ) && ( $_POST['email'] == $email) ){
    header('location:welcome.php');
}
else {
    echo 'incorrect password and email';
}


///////////////////////////////////// admin ////////////////////////
if(($_POST['email'] == "ayaalsawa279@gmail.com") && ($_POST['password'] == "AAAaaa123***")){
    header("location: admin.php");
}

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./login.css">
    <title>Sign Up </title>
    <link rel="stylesheet" href="signup.css">

 
</head>

<body>
    <div class="container">
        <div class="signup">
            <form method="post" action="">
                <h1> Login </h1>
                <h2> Welcome back! Login with your credentials</h2>
              
                <div class="inputs">
                    <label for="email" >Email</label> <br>
                    <input type="email" name="email" required> </div>
               <br>
                <div class="inputs">
                    <label for="password">Password</label> <br>
                    <input type="password" name="password" pattern=".{8,}" title="Password should be Eight (8) or more characters" > </div>
              
                <input type="submit" value="Login">

                <p>Don't you have an account? <a href="./reg.php"> Sign up</a></p>

            </form>
        </div>
       
        </div>
    </div>
</body>

</html>