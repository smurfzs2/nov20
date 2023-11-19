<?php
$conn = mysqli_connect("localhost", "root", "", "test_database");

// Check connection
if (!$conn) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
