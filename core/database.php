<?php

session_start();

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "redstore";

// Create connection
$connection = new mysqli($server, $user, $pass, $dbname);
// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// Set the Encoding language
$connection->set_charset("utf8mb4_general_ci");



?>
