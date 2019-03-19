<?php

    // create database connection
    $conn = new mysqli('localhost', 'root', '');

    // check connection
    if (mysqli_connect_errno()){
        exit('Connection Failed.'.mysqli_connect_error());
    }
    echo "Connection Success!";
?>