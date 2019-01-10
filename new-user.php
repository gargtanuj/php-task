<?php
require 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $POST['email'];
  $filename = $_FILES["image"]["name"];
  move_uploaded_file($_FILES['image'], 'images/' . $filename);
  $sql = "INSERT INTO users VALUES ($name, $email, $filename)";

  if ($conn->query($sql) === true) {
    $msg->status = true;
    $response = json_encode($msg);
    echo $response;
  } else {
    $msg->status = false;
    $response = json_encode($msg);
    echo $response;
  }
}
?>