<?php

include 'config.php';
include 'query.php';

//Register
$email = _POST['email'];
$password = md5(_POST['password']);
$name = _POST['name'];


//login
$_SESSION[“FirstName”];
$fetch = mysqli_fetch_assoc($conn,"SELECT * FROM UserProfile where $_POST('email' && 'password') != 0 ");
    
function login()
if fetch= mysqli_fetch_assoc()

        
      switch ($submit)
        case 1: register; 
            or 
        case 2: login;