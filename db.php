<?php

$servername = "den1.mysql5.gear.host";
$username = "oos";
$password = "Ak2KLrfx!!k1";
$db = "oos";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>