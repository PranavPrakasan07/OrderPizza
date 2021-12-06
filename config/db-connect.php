<?php
$servername = "localhost";
$username = "pranav";
$password = "abc.1234";
$dbname = "order_pizza";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  echo "Connection failed: " . mysqli_connect_error();
}
// else{
//   echo "Connected successfully with DB";
// }

?>
