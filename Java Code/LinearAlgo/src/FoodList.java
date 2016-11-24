
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.sql.ResultSetMetaData;



public class FoodList {
	
	private static Connection conn;
	
	public static void main(String[] args) {
		ArrayList<Food> foodList = new ArrayList<Food>();
		
		conn = connection();
		try {
			//This is what query you want to execute in the database
			PreparedStatement pstPrintTest = conn.prepareStatement("Select `name`, `proteinValue`,  `carbValue`, `fatValue`,`price/kg`, `suitsMeal`,`foodType` from Foods;");
			//Here you stored the executed query in the variable rs
			ResultSet rs = pstPrintTest.executeQuery();
			//We retrieve the metadata from the result
			ResultSetMetaData rsmd = rs.getMetaData();
			//count is used to know how many rows are selected
			int count = 0;
			int columnsNumber = rsmd.getColumnCount();
			//This will be used to store the whole result in a string
			String columnValue = "";
			while (rs.next()) {
			       for (int i = 1; i <= columnsNumber; i++) {
			           if (i > 1) System.out.print("");
			            columnValue += rs.getString(i) + ",";
			          
			       }
			       System.out.print("");
			       count++;
			   }
			//Here we split the string which was generated by the select statement
			String[] parts = columnValue.split(",");
			
			for (int i= 0; i < count; i++){
				String[] in = new String[columnsNumber];
				for (int j = 0; j < columnsNumber; j++){
					 in[j] = parts[(i * columnsNumber)+j];
				
				}
				String n = in[0];
				int p = Integer.parseInt(in[1]);
				int c = Integer.parseInt(in[2]);
				int f = Integer.parseInt(in[3]);
				double price = Double.parseDouble(in[4]);
				String suitsMeal = in[5];
				String category = in[6];
				
				Food food = new Food(n,p,c,f,price,suitsMeal,category);
				foodList.add(food);
			
			}
			
			

		} catch (SQLException ex) {

			ex.printStackTrace();

		}
		
		for (int i = 0; i < foodList.size(); i++){
			
			System.out.println(foodList.get(i).toString(true));
			
		}
		//Shit that can be altered with
		int calorieConstraint = 3000;
		double proteinFraction = 0.4;
		double carbFraction = 0.4;
		double fatFraction = 0.2;
		int nrOfMeals = 2;
		Boolean testMode = false;
			
		
		Calculator calc = new Calculator(foodList, calorieConstraint, proteinFraction, carbFraction, fatFraction);
		calc.Optimizer();
		calc.GenerateMeals(nrOfMeals);
		calc.PrintMeals();
		//calc.PrintConstraints();
		//calc.PrintMatrix();
	}
	
	
	public static Connection connection()
	{
		
		try {

			Class.forName("com.mysql.jdbc.Driver");
			conn = DriverManager.getConnection(
					"jdbc:mysql://localhost:3306/iGroshYou", "root", "lollol");

			return conn;
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
			return null;
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
			return null;
		}
		
		
	}
	
}
