<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "users_db";

    $con = mysqli_connect($server, $user, $password, $database);
    if(!$con){
        die("Connection failed. " . mysqli_connect_error());
    }
?>