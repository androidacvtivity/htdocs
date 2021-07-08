<?php

 require_once 'con_db.php'; 
$con  = new mysqli(Constants::$DB_SERVER,Constants::$USERNAME,Constants::$PASSWORD,
        Constants::$DB_NAME);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 

$sql = "SELECT NAME  FROM start3v2 ORDER BY  NAME";
$result = mysqli_query($con, $sql);

// Fetch all
//mysqli_fetch_all($result, MYSQLI_ASSOC);


$resultset=array(); 


// Associative array 
while($row=mysqli_fetch_assoc($result)) 
{ 
  $resultset[]=$row; 
} 
print_r($resultset); 

// Free result set 
mysqli_free_result($result); 
mysqli_close($connection); 

// Free result set
//mysqli_free_result($result);

//mysqli_close($con);


?>