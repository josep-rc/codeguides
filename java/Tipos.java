public class Tipos {
    public static void main(String[] args) {
        /*
         * Primitive data types: byte, short, int, long, float, double, boolean, char
         * Non-primitive data types: String, Arrays, Classes
         */

        // String
        String firstName = "John ";
        String lastName = "Doe";
        String fullName = firstName + lastName;
        System.out.println(fullName);
        
        // char
        char myLetter = 'D';
        // Asci code
        char myVar1 = 65, myVar2 = 66, myVar3 = 67;
        System.out.println(myVar1 + " " + myVar2 + " " + myVar3);
        
        // boolean
        boolean myBool = true;
        
        // numbers
        int myNum = 3 * 5;
        myNum = 10;
        int x = 5, y = 6, z = 50;
        System.out.println(x + y + z);
        x = y = z = 50;
        System.out.println(x + y + z);
        long myLong = 15000000000L;
        // amb <final> definim una constant
        final float pi = 3.1415f;
        double myDouble = 19.99d;
        float f1 = 35e3f;
        double d1 = 12E4d;
        System.out.println(f1);
        System.out.println(d1);

        int items = 50;
        float costPerItem = 9.99f;
        float totalCost = items * costPerItem;
        char currency = '$';
        System.out.println("Number of items: " + items);
        System.out.println("Cost per item: " + costPerItem + currency);
        System.out.println("Total cost = " + totalCost + currency);

        /*
         * Type casting
         * 2 tipus
         * Widening Casting (automatically) - converting a smaller type to a larger type size
         * byte -> short -> char -> int -> long -> float -> double
         * 
         * Narrowing Casting (manually) - converting a larger type to a smaller size type
         * double -> float -> long -> int -> char -> short -> byte
         */

        int nou = 9;
        double nouDecimal = nou; // casting automàtic
        System.out.println(nouDecimal);
        nou = (int) nouDecimal;  // casting manual

        // Operadors



    }
}