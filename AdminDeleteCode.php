<?php

$connection = mysql_connect('XXXXX','XXXXXXX','XXXXXXX') or die ("Couldn't connect to server."); 
$db = mysql_select_db('XXXXXXXX', $connection) or die ("Couldn't select database."); 

$search=$_POST['search'];

$data = 'SELECT * FROM `Restaurant` WHERE `ID` = "'.$search.'"';
  $query = mysql_query($data) or die("Couldn't execute query. ". mysql_error());
  $data2 = mysql_fetch_array($query);
  
  
?>

<script type="text/javascript">
    function clicked() {
       if (confirm('Are you sure you want to delete this Restaurant?')) {
           yourformelement.submit();
       } else {
           return false;
       }
    }
 
</script>

<html>
<head>
      <title></title>
 </head>

<body>

<!-- form to display record from database -->
<form name="form" method="POST" action="AdminDeleteCode2.php">
  Name: <input type="text" name="namefield" value="<?php echo $data2[restaurant_name]?>"/> <br>
  Location ID: <input type="text" name="namefield" value="<?php echo $data2[location_id]?>"/> <br>
  Location Name: <input type="text" name="namefield" value="<?php echo $data2[location_name]?>"/> <br>
  Number Of Tables: <input type="text" name="namefield" value="<?php echo $data2[num_of_tables]?>"/> <br>

  <br><br>
    <input type="hidden" name="keyfield" value="<?php echo $search?>">  
  <input type="submit"  value="submit" onClick="clicked()">
</form>

</body>

</html>