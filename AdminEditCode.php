<?php

$connection = mysql_connect('XXXXX','XXXXXXX','XXXXXXX') or die ("Couldn't connect to server."); 
$db = mysql_select_db('DatabaseName', $connection) or die ("Couldn't select database."); 

$search=$_POST['search'];

$data = 'SELECT * FROM `Restaurants` WHERE `ID` = "'.$search.'"';
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error());
  $data2 = mysql_fetch_array($query);
  
  
?>
td">
<html>
<head>
      <title></title>
 </head>

<body>

<!-- form to display record from database -->
<form name="form" method="POST" action="AdmitEditCode2.php">
  Restaurant Name: <input type="text" name="restaurant_name" value="<?php echo $data2[name]?>"/> <br>
  Location ID: <input type="text" name="location_id" value="<?php echo $data2[name]?>"/> <br>
  Location: <input type="text" name="location_name" value="<?php echo $data2[name]?>"/> <br>
  Number Of Tables: <input type="text" name="num_of_tables" value="<?php echo $data2[name]?>"/> <br>
  
  <input type="hidden" name="keyfield" value="<?php echo $search?>" />
  
  <input type="submit"  value="submit">
</form> 