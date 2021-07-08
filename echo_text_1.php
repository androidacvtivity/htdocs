<?php

 require_once 'con_db.php'; 
 
 // Create connection
$con  = new mysqli(Constants::$DB_SERVER,Constants::$USERNAME,Constants::$PASSWORD,
        Constants::$DB_NAME);
		
	// Check connection
	
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 


 $query=mysqli_query($con, "SELECT * FROM start3v2");
    $data = mysqli_fetch_array($query);
    echo $data["name"];

?>