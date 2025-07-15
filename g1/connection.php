<?php

    $host="localhost";
    $user="root";
    $password="";
    $db="login";
    $link =mysqli_connect($host,$user,$password,$db);

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    } 
?>