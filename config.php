<?php
$host = 'localhost';
$db = 'test';
$user = 'user1';
$pass = 'testtest';
$con = mysqli_connect($host, $user, $pass, $db);
echo "Hello";
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>