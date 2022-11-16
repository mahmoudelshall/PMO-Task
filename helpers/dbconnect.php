<?php
session_start();

$server = "localhost";
$dbName = "pmo";
$dbUser = "root";
$dbPassword = "";

$conn =  mysqli_connect($server, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    echo "Error : " . mysqli_connect_error();
}
