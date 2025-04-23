public class Bucles {
    public static void main(String[] args) {
        int i = 0;
        while (i < 5) {
            System.out.println(i);
            i++;
        }

        i = 0;
        do {
            System.out.println(i);
            i++;
        } while (i < 5);

        for (i = 0; i < 5; i++) {
            System.out.println(i);
        }

        String[] cars = { "Volvo", "BMW", "Ford", "Mazda" };
        for (String s : cars) {
            System.out.println(s);
        }

        // This example stops the loop when i is equal to 4:
        for (i = 0; i < 10; i++) {
            if (i == 4) {
                break;
            }
            System.out.println(i);
        }

        // This example skips the value of 4:
        for (i = 0; i < 10; i++) {
            if (i == 4) {
                continue;
            }
            System.out.println(i);
        }
    }
}
