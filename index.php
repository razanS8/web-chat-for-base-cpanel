<?php 
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "robot";
  
  $conn = mysqli_connect($host,$user,$password,$db);
  
  if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error); }
  echo "Connected successfully <br>";
  
  if(isset($_POST['front'])){
	  
		$query= "INSERT INTO directions (direction) VALUES ('F')";
		$run = mysqli_query($conn,$query);
		if ($run) {
			echo "New record created successfully";
			} 
			else {
			echo "Error: " . $query . "<br>" . $conn->error;
				}
		$conn->close();
	}
  
    if(isset($_POST['stop'])){
	  
		$query= "INSERT INTO directions (direction) VALUES ('S')";
		$run = mysqli_query($conn,$query);
		if ($run) {
			echo "New record created successfully";
			} 
			else {
			echo "Error: " . $query . "<br>" . $conn->error;
				}
		$conn->close();
	}
	
	  if(isset($_POST['right'])){
	  
		$query= "INSERT INTO directions (direction) VALUES ('R')";
		$run = mysqli_query($conn,$query);
		if ($run) {
			echo "New record created successfully";
			} 
			else {
			echo "Error: " . $query . "<br>" . $conn->error;
				}
		$conn->close();
	}
	
	  if(isset($_POST['left'])){
	  
		$query= "INSERT INTO directions (direction) VALUES ('F')";
		$run = mysqli_query($conn,$query);
		if ($run) {
			echo "New record created successfully";
			} 
			else {
			echo "Error: " . $query . "<br>" . $conn->error;
				}
		$conn->close();
	}
	
	  if(isset($_POST['backward'])){
	  
		$query= "INSERT INTO directions (direction) VALUES ('B')";
		$run = mysqli_query($conn,$query);
		if ($run) {
			echo "New record created successfully";
			} 
			else {
			echo "Error: " . $query . "<br>" . $conn->error;
				}
		$conn->close();
	}
  
  
  ?>