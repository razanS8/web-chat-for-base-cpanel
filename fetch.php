<?php 
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "robot";
  
  $conn = mysqli_connect($host,$user,$password,$db);
  
  if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error); }
  echo "Connected successfully <br>";
  
  $sql = mysqli_query($conn, "SELECT * FROM directions ORDER BY id DESC LIMIT 1");

  $print_data = mysqli_fetch_row($sql);
  
  echo $print_data[1];
  
  
  ?>
  
  