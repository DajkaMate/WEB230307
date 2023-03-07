<?php

function Connect()
{
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "login";

    $con = mysqli_connect($server, $user, $password, $db);
    if(!$con)
    {
        die("Error");
    }
    return $con;
}

    
