<?php
$dbHost = "localhost:3307";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cms";

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if(!$conn){
    die("Something went wrong. Database is not connected;");
}
?>