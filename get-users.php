<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $sql = "SELECT * FROM users";
  $result = $con->query($sql);
  $arr = [];
  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $obj->name = $row['name'];
      $obj->email = $row['email'];
      $obj->image = $row['image'];
      array_push($arr, $obj);
    }
    echo $arr;
  } else {
    echo $arr;
  }
}
?>