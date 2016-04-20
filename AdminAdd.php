
</head>
  
<link rel="stylesheet" href="stylesheet.css">
<h1>Add a new Restaurant</h1>


<form action="name_of_form" method="post" enctype="multipart/form-data" />
<p>Restaurant Name: <input type="text" name="restaurant_name" /> </p> 
<p>Restaurant Type <select name="restaurant_type">
    <option value="Pizza">Pizza</option>
    <option value="Chinese">Chinese</option>
    <option value="Indian">Indian</option>
    <option value="Mexican">Mexican</option>
    <option value="Thai">Thai</option>
    <option value="Italian">Italian</option>
    <option value="Cafe">Cafe</option>
	</select></p>
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<p>Menu (Image, upload to server then provide address do it by browsing): <input type="file" id="menu" name="menu" accept="image/*" /></p>
<p>Location_name (Possibly fill in location id automatically, dropdown or text): <input type="text" id="location_name" name="l_name" /> </p>
<p>Location_ID (Either fill in automatically or provide table with ID's and names): <input type="text" id="location_id" name="l_id" />
<p>Address: <input type="text" id="address" name="address" /></p>
<p>Number of Tables: <input type="text" id="num_of_tables" name="num_of_tab" /> </p>


<p><input type="submit" value="Submit"/><p>
</form>

<!--
Restaurant name
type of restaurant
menu
location id
name of location
address
num of tables


Preferable to add image url rather than uploading the file itself
	need to find a better way to find the file path

**MENU BROWSE BUTTON**

1) Configure the 'php.ini' file

	Search for the file_uploads directive and turn it on:
	
		file_uploads = On
		
2) Create the HTML form
	Finished above
	
		Method of form must be 'Post'
		The form also needs the attribute

		
-->
