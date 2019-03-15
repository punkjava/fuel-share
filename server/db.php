<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "fuel";

// Create connection
$connect = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>