<?php
$servername = "localhost";
$username = "pranav";
$password = "abc.1234";
$dbname = "order_pizza";

// Pranav Prakasan
// 19BCI0007
// 11.11.2021

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  echo "Connection failed: " . mysqli_connect_error();
}else{
  echo "Connected successfully with DB";
}

?>
