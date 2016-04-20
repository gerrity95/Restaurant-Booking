<?php

$connection = mysql_connect('XXXXX','XXXXXXX','XXXXXXX') or die ("Couldn't connect to server."); 
$db = mysql_select_db('XXXXXXXX', $connection) or die ("Couldn't select database."); 

$Key=$_POST['keyfield'];
$Name=$_POST['restaurant_name'];
$loc_id=$_POST['location_id'];
$loc_name=$_POST['location_name'];
$tables=$_POST['num_of_tables'];

$data = "UPDATE `table_name` SET name='$Name', location_id='$loc_id', location_name='$loc_name', num_of_tables='$tables' WHERE ID=".'"'.$Key.'"';
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error());
  
?>

<html>
<head>
      <title></title>
 </head>

<body>

<!--  display the changed record from database -->
  Restaurant Name: <?php echo $Name?><br>
  Location ID: <?php echo $loc_id?><br>
  Location Name: <?php echo $loc_name?><br>
  Number Of Tables: <?php echo $tables ?><br><br>

</body>
