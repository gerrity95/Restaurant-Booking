public class SQLRetrievingInfo extends SQLConnecting
{
	
	import java.sql.Connection;
	import java.sql.DriverManager;
	import java.sql.SqlException;
	
	public int table_type_id
	
	public String locationName;
	public String locationRestaurantNum;
	
	//What type will the menu be? better off to redirect to url or seperate page
	public String restaurantType;
	public String restaurantLocation;
	
	public int tableTypeID;
	public String tableInfo;
	
	public SQLRetrievingInfo()
	{
	
		firstName = fn;
		secondName = sn;
		contact = c;
		date = d;
		time = t;
		numOfSeats = nos;
	
		

	
		try{
		
				Class.forName("com.mysql.jdbc.Driver");
				
				con = DriverManager.getConnection("jdbc:mysql://localhost:3306/restaurant", user, pword);
				st. con.createStatement();
				
			}catch(Exception ex){
				System.out.printlN("Error: " + ex);
			}
	
	}
	
	//######################### Location Information
	
	public String getLocationName()
	{
		
		try{
			
			String getLocName = "SELECT name_location FROM locations";
			rs = st.executeQuery(getLocName);
			
			
			while(rs.next()){
			locationName = rs.getString("locationName");
			}
			}catch (Exception ex) {
				System.out.println("Error: " + ex);
				}
		
		
		return locationName;
	}
	
	
	
	public String getLocationRestaurantNum()
	{
				try{
			
			String getLocName = "SELECT num_of_restaurants FROM locations";
			rs = st.executeQuery(getLocName);
			
			
			while(rs.next()){
			locationRestaurantNum = rs.getString("locationRestaurantNum");
			}
			}catch (Exception ex) {
				System.out.println("Error: " + ex);
				}
		
		
		return locationRestaurantNum;
	}
	
	
	public void returnLocationInfo()
	{
		try {
			Statement stmt = con.createStatement();
			ResultSet rs = stmt.executeQuery("Select location_name, num_of_restaurants FROM locations");
			
			System.out.println("Location Name:	Number Of Restaurants:");
			
			while (rs.next()) {
				String name = rs.getString("name");
				String numOfRestaurants = rs.getInt("numOfRestaurants");
				
				System.out.println(name + "		" + numOfRestaurants);
			}
		} catch(SQLException e){
			System.out.println("SQL Exception occured: " + e);
		}
	}
			
		
	
	}
	
	
	//##########################
	
	//########################## Restaurant Info - Name, type, menu, name_of_location
	
	
	public void getMenu()
	{
	
	}
	
	public String getRestaurantType()
	{
	
			
		try{
			
			String getRestName = "SELECT restaurant_type FROM restaurants";
			rs = st.executeQuery(getRestName);
			
			
			while(rs.next()){
			restaurantType = rs.getString("restaurantType");
			}
			}catch (Exception ex) {
				System.out.println("Error: " + ex);
				}
		
		
		return restaurantType;
	
	}
	
	public String getRestaurantLocation()
	{
	
		try{
			
			String getRestLoc = "SELECT restaurant_location FROM restaurants";
			rs = st.executeQuery(getRestLoc);
			
			
			while(rs.next()){
			restaurantLocation = rs.getString("restaurantLocation");
			}
			}catch (Exception ex) {
				System.out.println("Error: " + ex);
				}
		
		
		return restaurantLocation;		
	
	}
	

	public void getRestaurantInfo()
	{
	
	}
	
	
	
	//##########################
	
	//########################## Table Related Info
	
	
	public int getTableTypeID() //The info provided will be based on the seats requested in the reservation
	{
	
	
	
		try{
			
			String getTab = "SELECT ID FROM table_type WHERE num_of_seats = ' "this.getNumOfSeats()" ' "; //This gets the table_type_ID which should then be added to the relevant tables
			rs = st.executeQuery(getTab);
			
			
			while(rs.next()){
			tableTypeID = rs.getInt("tableTypeID");
			}
			}catch (Exception ex) {
				System.out.println("Error: " + ex);
				}
		
		
		return tableTypeID;
	
	}
	
	public void getTableInfo() //Make sure there is a provision so it isn't a table that is already in use
	{
	
	}	
	
//#################################################
	
	public void ReservationCancel()
	{
	
	}
	
	
	
	/*
	
	Getting a list of locations
	List of restaurants based on location/food type
	
	List available tables at a given time
	
	Getting table information
	Getting table_type information
	
	Cancelling a reservation - Retrieve reservation information and output to confirm it is the correct one
	
	Retrieving Menu
	
	
	
	*/