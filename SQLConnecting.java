package database_console;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SqlException;


public class SQLConnecting
{
	private Connection con;
	private Statement st;
	private ResultSet rs;
	private String user = "";
	private String pword = "";
	
	public String firstName;
	public String secondName;
	public int contact;
	
	public String date;
	public String time;
	public int numOfSeats;
	
	public SQLConnecting(String fn, String sn, int c, String d, String t, int nos)
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
	
	public String getFirstName()
	{
		return firstName;
	}
	
	public String getSecondName()
	{
		return secondName;
	}
	
	public int getContact()
	{
		return contact;
	}
	
	public String getDate()
	{
		return date;
	}
	
	public String getTime()
	{
		return time;
	}
	
	public int getNumOfSeats()
	{
		return numOfSeats;
	}
	
	public void setFirstName(String newFirstName)
	{
		firstName = newFirstName;
	}
	
	public void setSecondName(String newSecondName)
	{
		secondName = newSecondName;
	}
	
	public void setContact(int newContact)
	{
		contact = newContact;
	}
	
	public void setDate(String newDate)
	{
		date = newDate
	}
	
	public void setTime(String newTime)
	{
		time = newTime;
	}
	
	public void setNumOfSeats(int newNumOfSeats)
	{
		numOfSeats = newNumOfSeats;
	}
	
	public void insertGuest()
	{
	
		
		try{
		
			String sql = "insert into guests "
							+ " (this.getFirstName(), this.getSecondName(), this.getContact())"
							+ " values (?, ?, ?)";
							
			PreparedStatement statement = (PreparedStatement) con.prepareStatement(sql);
			statement.setString(1, firstName);
			statement.setString(2, secondName);
			statement.setInt(3, contact);
			
			statement.execute();
			
			}catch (Exception ex) {
					System.out.println("Error: " + ex);
					}
					
		
	}
	
	
	public void insertReservation()
	{
		
		//How do we add guest id??
		try{
		
			String sql = "insert into reservations "
							+ " (this.getDate(), this.getNumOfSeats())"
							+ " values (?, ?)";
							
			PreparedStatement statement = (PreparedStatement) con.prepareStatement(sql);
			statement.setString(1, date);
			statement.setString(2, numOfSeats);
			
			statement.execute();
			
			}catch (Exception ex) {
					System.out.println("Error: " + ex);
					}
	
	}
	
	
	public void insertOccupiedTable()
	{
	
	}
	
	public void insertReservedTable()
	{
	
	}
	
	
	/*
	Do the check for if there is a free table at any given time
		Get the total number of Tables from 'Restaurant Table'
		Get the number of occupied tables at the given time
		(Total numOfTables - numOfOccupiedTables): For each table type
			if there is an available table
				Assign it to the users reservation
			else
				Ask them to choose a different time
		
	
	Depending on how many seats the customer wants, need to get a table for them
	
	What happens when someone wants to cancel their reservation?
	
	Table & Table_Type won't be edited here only data will be grabbed from these tables
		To get this data, maybe a select statement and add as a variable
		If getting them as a variable, how to use them in another function?
	
	How does it work if we have the ID automatically generated in the SQL?
		Do we just need to add all the other details?
		Make it a random 6 digit number
	
	
	*/
}