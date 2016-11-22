import java.awt.List;
import java.util.ArrayList;
import java.util.Collection;

import org.apache.commons.math.optimization.GoalType;
import org.apache.commons.math.optimization.OptimizationException;
import org.apache.commons.math.optimization.RealPointValuePair;
import org.apache.commons.math.optimization.linear.LinearConstraint;
import org.apache.commons.math.optimization.linear.LinearObjectiveFunction;
import org.apache.commons.math.optimization.linear.Relationship;
import org.apache.commons.math.optimization.linear.SimplexSolver;

public class FoodList {
	public static void main(String[] args) {
		
		
		
		
		//Shit that can be altered with
		double errorMargin = 1;
		int calarieConstraint = 3000;
		double proteinFraction = 0.4;
		double carbFraction = 0.4;
		double fatFraction = 0.2;
		int nrOfMeals = 1;
		
		Food chicken = new Food("chicken", 20, 1, 2);
		Food oil = new Food("oil", 0, 1, 90);
		Food pasta = new Food("pasta", 11, 50, 0);
		Food cashew = new Food("Cashew", 22, 5, 49);
		Food blueBerry = new Food("Blueberry", 1, 10, 1);
		
		ArrayList<Food> foodList = new ArrayList<Food>();
		
		foodList.add(chicken);
		foodList.add(oil);
		foodList.add(pasta);

		//foodList.add(cashew);
		//foodList.add(blueBerry);
		
		/*
		 * Converting calories to nutrition values.
		 * 1 gram of protein = 4 cal
		 * 1 gram of carbs = 4 cal
		 * 1 gram of fat = 9 cal
		 * 
		 */
		double proteinLimit = calarieConstraint * proteinFraction / 4;
		double carbLimit = calarieConstraint * carbFraction / 4;
		double fatLimit = calarieConstraint * fatFraction / 9;
		
		//Print the constraints
		System.out.println("Total Calories: " + calarieConstraint + 
				". Protein: " + proteinLimit +
				". Carbs: " + carbLimit +
				" Fat: " + fatLimit);
//		
//		for(int i = 0; i < foodList.size(); i++){
//			System.out.print(foodList.get(i).toString(true));
//		}
//		System.out.println();
		

		/*
		 * Optimization
		 */
		
		//Build a matrix
		double[] constraints = {proteinLimit, carbLimit, fatLimit};
		int numberOfConstraints = constraints.length;
		int numberOfItems = foodList.size();
		
		double[][] array = new double[numberOfConstraints][numberOfItems];		
		
		for (int i = 0; i < numberOfConstraints; i++){
			
			for (int j = 0; j < numberOfItems; j++){
				if (i == 0)
					array[i][j] = foodList.get(j).getProtein();
				else if (i == 1)
					array[i][j] = foodList.get(j).getCarbs();
				else if (i == 2)
					array[i][j] = foodList.get(j).getFat();
			}
		}
		//print the matrix
		System.out.println("Input matrix");
		for (int i = 0; i < numberOfConstraints; i++){
			for (int j = 0; j < numberOfItems; j++){
				System.out.print(array[i][j] + " ");
			}
			System.out.println(constraints[i]);
		}
		System.out.println();
		
		
		
		double totalProtein = 0;
		double totalFat = 0;
		double totalCarbs = 0;
		double increment = 1;
		boolean optimized = false;
		int iterations = 0;
		double[] result = new double[foodList.size()];
		boolean inc = true;
		int pos = 0;
		double[] tmp = new double[foodList.size()];
		while (iterations < 1000){
			if (pos > 2)
				pos = 0;
			for (int i = 0; i < foodList.size(); i++){
				
				for (int j = 0; j < constraints.length; j++){
					tmp[i] += array[i][j] * result[j];					
				}
				
			}
			if (inc)
				result[pos] += increment;
			iterations++;
			pos++;
		
		}
	
		
		for (int r = 0; r < result.length; r++){
			System.out.println(tmp[r]);
		}	

		
		for (int r = 0; r < result.length; r++){
			System.out.println(result[r]);
		}

//		//eliminate
//		int colums = foodList.size();
//		int rows = constraints.length;
//
//		for (int i = 0; i < colums - 1; i++){
//			int max = 0; //position of largest
//			for (int j = 0; j < colums; j++){
//				if (Math.abs(array[i][j]) > Math.abs(array[i][max])) {
//					max = j;					
//				}
//			}
//					
//			for (int p = i + 1; p < rows; p++){
//				double tmp = array[p][max]/array[i][max];
//				System.out.println(tmp);
//				constraints[p] -= constraints[i] * tmp;
//				for (int g = 0; g < colums; g++){
//					array[p][g] -= array[i][g] * tmp;
//				}
//			}
//
//		}
//		
//		
//		
//        System.out.println("Pivot matrix");
//		for (int i = 0; i < numberOfConstraints; i++){
//			for (int j = 0; j < numberOfItems; j++){
//				System.out.print(array[i][j] + " ");
//			}
//			System.out.println(constraints[i]);
//		}
//		System.out.println();
//		
//        // back substitution
////        double[] x = new double[rows];
////        for (int i = rows - 1; i >= 0; i--) {
////            double sum = 0.0;
////            for (int j = i + 1; j < rows; j++) {
////                sum += array[i][j] * x[j];
////            }
////            x[i] = (constraints[i] - sum) / array[i][i];
////        }
////		
////		for (int i = 0; i < x.length; i++){
////			System.out.println(x[i]);
////		}
////
	}

}
