<?php

include 'config.php';
include 'query.php';

//Register
$email = $_POST['email'];
$password = md5($_POST['password']);
$name = $_POST['name'];

echo “<h3> Welcome: “$FirstName $LastName ”</h3>”
echo “<h3> Email:  “$LastName ”</h3>”
echo “<h3> First Name: “$Email”</h3>”

//login
$_SESSION[“FirstName”];
$fetch = mysqli_fetch_assoc($conn,"SELECT * FROM UserProfile where $_POST('email' && 'password') != 0 ");
    
function login()

        
      switch ($submit){
        case 1: register; 
          break;
        case 2: login;
            break;
            
      }