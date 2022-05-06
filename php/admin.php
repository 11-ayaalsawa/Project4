<?php
session_start();


setCookie('FirstName', date("m/d/y H:ia "), 60*24*60*60+time());

$fname=$_SESSION['firstname'];
$faname=$_SESSION['familyname'];
$email=$_SESSION['email'];
$pass=$_SESSION['password'];
$datecCreated= $_SESSION['date_create'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        div {
            position:absolute;
            top: 40%;
            left: 32%;
        }
    table{
        border: 3px solid  #5a54ff;
        text-align: center;

     }

     tr , td {
        border: 3px solid  #5a54ff;
     }
    </style>
<body>
    <div>
    <table>
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Password
            </th>
            <th>
                Date created
            </th>
            <th> 
                Last login
            </th>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $fname." ".$faname ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $pass ?></td>
            <td><?php echo $datecCreated ?></td>
            <td><?php echo $_COOKIE['FirstName'];?></td>

        </tr>
    </table>
</div>
</body>
</html>