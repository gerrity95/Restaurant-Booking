<link rel="stylesheet" href="stylesheet.css">

<?php

define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

	if (!$link)
	{
		die('Could not connect: ' . mysql_error());
	}
	
$db_selected = mysql_select_db(DB_NAME, $link);

	if(!$db_selected)
	{
		die('Cannot use ' . DB_NAME . ': ' . mysql_error());
	}
	
	$valueForFirst = $_POST['customer_name']; //Change these to the respective attributes in the other tables, i.e. Track_ID etc.
	$valueForSecond = $_POST['customer_num'];
	$valueForThird = $_POST['date_of_res'];
	$valueForFourth = $_POST['time']; //Do it to here adding in each attribute, if you need to add a new value just copy and paste and call it $valueForFifth
	$valueForFifth = $_POST['seats'];
	
	$sql = "INSERT INTO `Bookings` (`Customer_Name`, `Customer_Num`, `Date_of_Reservation`, `Time`, `seats`) VALUES ('$valueForFirst', '$valueForSecond', '$valueForThird', '$valueForFourth', '$valuesForFifth')"; 
	//^^FOR ABOVE^^ Change employees to what ever the name of the table is, And then Employee_ID etc. to the corresponding attributes, and then for $valueForFirst etc. if you need to add in a new one just follow the syntax for the others and add in at the end
	
	if (!mysql_query($sql))
	{
		die('Error: ' .mysql_error());
	}
	
	echo 'Your submission has been successful';
	echo '<br>';
	echo 'To return to the previous page <a href="Employee-Add.php" >please click here</a>'; //Change the Link to whatever you call the file
	echo '<br>';
	echo 'To view the Employee Database <a href="Employee-Table.php" >please click here </a>'; //Change the link to *-Table.php; * being the name of the table you are using
	echo '<br>';
	echo 'To go back to the homepage <a href="Home.html">please click here</a>';
	
	
	mysql_close();
	
?>