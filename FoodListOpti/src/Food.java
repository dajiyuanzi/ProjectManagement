
public class Food {
	
	String[] category = {"meat", "grain", "fruit/berries", "dairy", "oil"};
	private String name = "";
	private double protein = 0;
	private double carbs = 0;
	private double fat = 0;
	int amount = 0;
	
	public Food(String n, int p, int c, int f){
		name = n;
		protein = p;
		carbs = c;
		fat = f;
	}
	public String toString(Boolean perGram){
		String s;
		if (perGram)
			s = "Name: " + name + " Protein: " + protein/100 + " carbs: " + carbs/100 + " fat " + fat/100 + " Amount " + amount + "\n";
		
		else
			s = "Name: " + name + " Protein: " + protein + " carbs: " + carbs + " fat " + fat + " Amount " + amount/100 + "\n";		
		return s;
	}
	
	public String getName(){
		return name;
	}
	public double getProtein(){
		return protein/100;
	}
	public double getCarbs(){
		return carbs/100;
	}
	public double getFat(){
		return fat/100;
	}
	public void setAmount(){
		amount++;
	}
	public int getAmount(){
		return amount;
	}

}
