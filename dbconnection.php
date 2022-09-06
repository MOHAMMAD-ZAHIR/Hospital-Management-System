<?php
// Create connection
$con=mysqli_connect("localhost","root","","ohmsphp");


// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}