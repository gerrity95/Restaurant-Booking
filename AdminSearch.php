<head>
</head>
  
<link rel="stylesheet" href="stylesheet.css">
<h1>Search Restaurants</h1>


<li id="menu">
<ul><a href="#">Home</a></ul>

</li>


<form action="name_of_form" method="post" />
<p>Restaurant ID: <input type="text" name="Employee_ID" /> </p>
<p>Restaurant Name: <input type="text" name="Employee_ID" /> </p> 
<p>Restaurant Type: <select name="restaurant_type">
    <option value="Pizza">Pizza</option>
    <option value="Chinese">Chinese</option>
    <option value="Indian">Indian</option>
    <option value="Mexican">Mexican</option>
    <option value="Thai">Thai</option>
    <option value="Italian">Italian</option>
    <option value="Cafe">Cafe</option>
	</select></p>
<p>Restaurant Location: (Autocomplete entry from the entries in the database) <input id="datepicker" name="dob" /></p>
<p>Location ID: <input id="restaurant_id" name="location_id" />
<p><input type="submit" value="Submit"/><p>
</form>

<!--
This form is used when someone rings up, they just have to fill out one of the fields and that will provide a table with results
Any field that is not filled in will be returned as a wildcard
Along with the table will be the form to search again and a link to the add reservation page
-->
