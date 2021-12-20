<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="register_database";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//chack connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

?>