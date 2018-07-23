<?php 
include 'config.php';
include 'query.php';
$submit = $_POST['submit'];

function login(){
    
    $email = $_POST['email'];
    $Password = md5($_POST['Password']);
    
       if(mysqli_num_rows(query("select * from userprofile where 'LoginID'=$LoginID 'Password'=$Password")==1)){

       session_start();
       $getuser = fetch('select * from userprofile where "email"=$email && "Password"=$Password');
       
       $_SESSION['email']=$getuser['email'];
       $_SESSION['Password']=$getuser['Password'];
       $_SESSION['FirstName']=$getuser['FirstName'];
       $_SESSION['LastName']=$getuser['LastName'];
              
}

}


?>