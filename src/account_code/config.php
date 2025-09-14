<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "account_info";

    $conn = new mysqli($host, $user, $pass, $database);

    if ($conn -> connect_error){
        die("Connection failed: ". $conn->connect_error);
    }
