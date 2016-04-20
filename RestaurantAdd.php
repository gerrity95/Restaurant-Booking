<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd'});
  });
  </script>
</head>
  
<link rel="stylesheet" href="stylesheet.css">
<h1>Add Reservation</h1>


<form action="name_of_form" method="post" />
<p>Customer Name: <input type="text" name="customer_name" /> </p> 
<p>Customer Number: <input type="text" name="customer_num" /> </p>
<p>Date of Reservation: <input id="datepicker" name="date_of_res" /></p>
<p>Time of Reservation: <select name="time">
    <option value="1:00">1:00</option>
    <option value="1:30">1:30</option>
    <option value="2:00">2:00</option>
    <option value="2:30">2:30</option>
    <option value="3:00">3:00</option>
    <option value="3:30">3:30</option>
    <option value="4:00">4:30</option>
    <option value="4:30">5:00</option>
    <option value="5:00">5:30</option>
    <option value="5:30">6:30</option>
	</select></p>
<p>Number of Seats: <select name="seats">
	<option value="one">One</option>
	<option value="two">Two</option>
	<option value="three">Three</option>
	<option value="four">Four</option>
	<option value="five">Five</option>
	<option value="six">Six</option>
	<option value="seven">Seven</option>
	<option value="eight">Eight</option>
	
<p><input type="submit" value="Submit"/><p>
</form>

<!--
This is too add a customer to the reservation system
Will link to a table with the reservations at that time and will add the reservation if there is space available
ideally the user will have checked availability already through the search
-->
