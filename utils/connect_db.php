<?php
 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="cosmetic_db";
 
// Connection
$conn = mysqli_connect($servername,$username, $password, $dbname);
mysqli_set_charset($conn, 'UTF8');
// Check if connection is
// Successful or not
if (!$conn) {
  die("Connection failed: "
      . mysqli_connect_error());
}
?>