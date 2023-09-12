<?php

$host = "localhost";
$dbname = "systemdb";
$username = "root";
$password = "";

$con = new mysqli(  hostname: $host,
                    username: $username,
                    password: $password,
                    database: $dbname);

if(!$con){
    die(mysqli_error($con));
}
?>