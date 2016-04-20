<!-- 


Same idea as the delete form except that the entries will be edited

-->

<head>
 
<script type="text/javascript">
    function clicked() {
       if (confirm('Are you sure you want to delete this Restaurant?')) {
           yourformelement.submit();
       } else {
           return false;
       }
    }
 
</script>
<link rel="stylesheet" href="stylesheet.css">
<h1>Restaurant Edit</h1>


<form action="adminEditCode.php" method="post" />
<p>Restaurant ID: <input type="text" name="restaurant_id" /> </p> 

<input type="submit" value="Click to find Info" />

</form>

</head>