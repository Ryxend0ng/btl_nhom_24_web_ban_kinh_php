<?php
$servername = "localhost";
$username = "root";
$password = "YES";

// Create connection
$conn = new mysqli($servername, $username, '','website_qlbh');
mysqli_set_charset($conn,'utf8');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();

?>