public class Strings {
    public static void main(String[] args) {
        String abc = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        System.out.println("The length of the txt string is: " + abc.length());

        String txt = "Hello World";
        System.out.println(txt.toUpperCase()); // Outputs "HELLO WORLD"
        System.out.println(txt.toLowerCase()); // Outputs "hello world"

        String locate = "Please locate where 'locate' occurs!";
        System.out.println(locate.indexOf("locate")); // Outputs 7

        // https://www.w3schools.com/java/java_ref_string.asp

        // Concatenar
        String firstName = "John";
        String lastName = "Doe";
        System.out.println(firstName + " " + lastName);
        // o
        System.out.println(firstName.concat(lastName));
        String x = "10";
        int y = 20;
        String z = x + y; // z will be 1020 (a String)

        // Caràcters especials
        String txt2 = "We are the so-called \"Vikings\" from the north.";
        String txt3 = "It\'s alright.";
        String txt4 = "The character \\ is called backslash.";
        // \n -> new line
        // \r -> return
        // \t -> tab
        // \b -> backspace
        // \f -> form feed (fi de pàgina)
    }
}
