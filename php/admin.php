<?php
session_start();


// setCookie('FirstName', date("m/d/y H:ia "), 60*24*60*60+time());

// $fname=$_SESSION['firstname'];
// $faname=$_SESSION['familyname'];
// $email=$_SESSION['email'];
// $pass=$_SESSION['password'];
// $datecCreated= $_SESSION['date_create'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin.css">
    <title>Document</title>
  

   
<body>
   
<h1> Admin page </h1>
<table id="data">

  <tr>
    <th>ID</th>
    <th> Name</th>
    <th> Email</th>
    <th>Password</th>
    <th>Date created</th>
    <th>Last login</th>
  </tr>

  <?php
        $id= 1;
        foreach ($_SESSION["usersData"] as $value) {
            
            echo "<tr>
                    <td>".$id."</td>
                    <td>".$value['firstname']."</td>
                    <td>".$value['email']."</td>
                    <td>".$value['password']."</td>
                    <td>".$value['date_create']."</td>
                    <td>".$value["Last-Login-Date"]."</td>
                </tr>";
            $id++;
        }
        ?>
 
</table>
</body>
</html>