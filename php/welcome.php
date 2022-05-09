<?php

session_start();
// $fname=$_SESSION['firstname'];
// $mname=$_SESSION['middlename'];
// $lname=$_SESSION['lastname'];
// $faname=$_SESSION['familyname'];
// $email=$_SESSION['email'];
// $phone=$_SESSION['phonenumber'];




?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">
    <link rel="stylesheet" href="./welcome.css">
    <title>Document</title>
  
</head>
<body>
 


  

    
    
    <div class="content">
      <h1>Welcome <?php echo  $_SESSION["user_fname"]. " ". $_SESSION["user_mname"] ." ".  $_SESSION["user_lname"] ." " .  $_SESSION["user_faname"]?>!</h1>
      <h2>Your Email is : <?php echo  $_SESSION["userEmail"] ?></h2>
      <br>
      <h2> Your Phone Number is: <?php echo  $_SESSION["userMobile"]?> </h2>
     
    </div>
    
  </body>
  
</html> 
</body>
</html>