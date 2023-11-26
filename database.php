<?php

$host = "localhost";
$dbuser = "root";
$password = "";
$dbName = "southern_pearl";
$conn = mysqli_connect($host, $dbuser, $password, $dbName);

if(!$conn){
    die("Something went wrong");
}


?>