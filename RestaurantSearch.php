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
<h1>Search Reservations</h1>


<form action="name_of_form" method="post" />
<p>Customer Name: <input type="text" name="Employee_ID" /> </p> 
<p>Customer Number: <input type="text" name="Name" /> </p>
<p>Date of Reservation: <input id="datepicker" name="dob" /></p>
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
<p><input type="submit" value="Submit"/><p>
</form>

<!--
This form is used when someone rings up, they just have to fill out one of the fields and that will provide a table with results
Any field that is not filled in will be returned as a wildcard
Along with the table will be the form to search again and a link to the add reservation page
-->
