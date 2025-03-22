<?php
$servername = "sql210.infinityfree.com";
$username = "if0_38576139";
$password = "fKAXoTUfgV";
$dbname = "if0_38576139_crud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
