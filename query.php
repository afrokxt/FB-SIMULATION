<?php
    include "config.php";
    
    function query($string) {
        global $conn;
        return mysqli_query($conn, $string);
    }
    
    function fetch($string){
        return mysqli_fetch_assoc(query($string));
    }
    function fetch_all($string){
        return mysqli_fetch_all(query($string), MYSQLI_ASSOC);
    }
    
?>

