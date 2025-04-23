public class Arrays {
    public static void main(String[] args) {
        String[] fruits;
        String[] cars = { "Volvo", "BMW", "Ford", "Mazda" };
        int[] myNum = { 10, 20, 30, 40 };

        System.out.println(cars[0]); // Volvo

        cars[0] = "Opel";
        System.out.println(cars[0]); // Opel

        System.out.println(cars.length); // 4

        for (int i = 0; i < cars.length; i++) {
            System.out.println(cars[i]);
        }

        for (String s : cars) {
            System.out.println(s);
        }

        int[][] myNumbers = { { 1, 2, 3, 4 }, { 5, 6, 7 } };
        System.out.println(myNumbers[1][2]); // Outputs 7

        myNumbers[1][2] = 9;
        System.out.println(myNumbers[1][2]); // Outputs 9 instead of 7

        for (int i = 0; i < myNumbers.length; ++i) {
            for (int j = 0; j < myNumbers[i].length; ++j) {
                System.out.println(myNumbers[i][j]);
            }
        }

        for (int[] row : myNumbers) {
            for (int i : row) {
                System.out.println(i);
            }
        }
    }
}
