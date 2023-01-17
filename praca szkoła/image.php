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
 $song_name = $_POST["image_name"];
 $song_data = $_POST["image_data"];
 $username  = $_SESSION["username"];
 $song_date = $date("Y/m/d");
 
 $sql="INSERT INTO images(username, nazwa_piosenki, data_utworzenia , informacje"base64") VALUES('$username','$song_name', '$song_date', '$song_data')"; 
 mysqli_query($db,$sql);  