
import java.util.ArrayList;

public class FoodList {
	public static void main(String[] args) {
		ArrayList<Food> foodList = new ArrayList<Food>();

		//Shit that can be altered with
		int calorieConstraint = 3000;
		double proteinFraction = 0.4;
		double carbFraction = 0.4;
		double fatFraction = 0.2;
		int nrOfMeals = 1;
		Boolean testMode = false;
			
		Food chicken = new Food("chicken", 20, 1, 2, 50.0, "dinner");
		Food oil = new Food("oil", 0, 1, 90, 75.0, "dinner");
		Food pasta = new Food("pasta", 11, 50, 0, 11.0, "dinner");
		Food cashew = new Food("Cashew", 22, 5, 49, 119.0, "Snack");
		Food blueBerry = new Food("Blueberry", 1, 10, 1, 79.0, "snack");
		Food cottageCheese = new Food("Cottage Cheese", 11, 4, 3, 27.0, "snack");		
		foodList.add(chicken);
		foodList.add(oil);
		foodList.add(pasta);
//		foodList.add(cashew);
//		foodList.add(blueBerry);
//		foodList.add(cottageCheese);
		
		Calculator calc = new Calculator(foodList, calorieConstraint, proteinFraction, carbFraction, fatFraction);
		calc.Optimizer();
		calc.PrintConstraints();
		calc.PrintMatrix();
	}
}