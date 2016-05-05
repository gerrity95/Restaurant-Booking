import java.util.Scanner;
import java.util.ArrayList;

public class loop
{
	public static void main(String [] args)
	{
			Scanner sc = new Scanner(System.in);
			
			// This array will contain a list of all table numbers
			int[] totalTables = new int[] {1,2,3,4,5,6,7,8,9,10 };
			
				int add = 1;
				int i = 0;
			
			//This is where the occupied tables will be assigned depending on time
			ArrayList<Integer> al = new ArrayList();
			
			//These are the seats that are taken at different times
			int[] occupiedTablesAtOne = new int[] {1,2,3,4,5,6,7,8,9};
			int[] occupiedTablesAtTwo = new int[] {5,3,7,2,1,9};
			int[] occupiedTablesAtThree = new int[] { 3,5,6,7,2,9};
			
			
			System.out.println("Please tell me what time you would like to make your reservation at?");
			System.out.println("1. 13:00\n2. 14:00\n3. 15:00");
			int choice = sc.nextInt();
			
			
		//Assigns the appropriate seat numbers depending on time	
		switch (choice) {
			
			case 1: 
			for(i=0;i<occupiedTablesAtOne.length;i++)
			{
				al.add(occupiedTablesAtOne[i]);
			}
			break;
			
			case 2:
			for(i=0;i<occupiedTablesAtTwo.length;i++)
			{
				al.add(occupiedTablesAtTwo[i]);
			}
			break;
			
			case 3:
			for(i=0;i<occupiedTablesAtThree.length;i++)
			{
				al.add(occupiedTablesAtThree[i]);
			}
			break;
			
			default: System.out.println("Incorrect Input");
			
			}
	
	
	
			i=0;
			int h =0;
			int count = 0;
			int check = 0;
			int asses = 0;
			int j = 0;
			while(i < totalTables.length && asses != 1)
			{
				count = 0;
				j = totalTables[i];
				
				while ( h < al.size() && count != 1)
				{
					int k = al.get(h);
					//System.out.println(j + " " + k);
					
					if ( j == k)
					{
						System.out.println("It matches");
						System.out.println(j + "	" + k);
						
						check = 0;
						count = 1;
					}
					else
					{
						check = 1;
						
					}
				
					h++;
				}	
				
				if (check == 1) //|| count != 1)
				{
					System.out.println("No match for: " + j);
					asses = 1;
				}
				
				h=0;
				i++;
			}
			
			System.out.println("Done");
			System.out.println("Your table number is: " + j);
	}
}