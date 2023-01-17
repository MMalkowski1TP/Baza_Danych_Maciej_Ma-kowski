<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
 $image_name = $_POST["image_name"]
 $image_data = $_POST["image_data"]
 $username  = $_SESSION["username"]