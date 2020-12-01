<?php

$servername = "localhost";
$database = "cpreplay";
$username = "root";
$password = "abraham.leiro1";
// Create connection
$link = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
}
?>