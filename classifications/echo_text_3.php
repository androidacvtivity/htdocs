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


 $query=mysqli_query($con, "SELECT *  FROM cl_med_10_07_19 ORDER BY  ID");
 
 
    

?>

<table border='1'><tr>
    <th>nr ordine</th>
    <th>Denumirea comerciala</th>
    <th>Denumirea internationala</th>
</tr>
<?php
while($data = mysqli_fetch_array($query)){ ?>
<tr>
    <td><?php echo $data["nr_ordine"]; ?></td>
    <td><?php echo $data["den_come"]; ?></td>
    <td><?php echo $data["denumirea_int"]; ?></td>
</tr>
<?php } ?>