using System;

// Es un tipo de referencia, y son inmutables
// Se definen operadores de igualdad == != para comparar los valores
string a = "hello";
string b = "h";
b += "ello";
Console.WriteLine(a == b); // true contenido equivalente
Console.WriteLine(object.ReferenceEquals(a, b));// false referencia a diferente instancia

// Concatenación con operador +
string gm = "good " + "morning";

// Acceso a los caracteres con el operador [], recorrer con gm.Length
char x = gm[3]; // x = 'd'

string firstName = "Bob";
string fullNameWithTabSeparator = "Bob\tSmith";
// verbatim string to ignore \t
string filePath = @"C:\televisions\sony\bravia.txt";
//Para incluir un signo de comillas dobles en una cadena @-quoted, duplíquelo:
string comillas = @"""Ahoy!"" cried the captain."; // "Ahoy!" cried the captain.

string name = "Mark";
DateTime date = DateTime.Now;
int age = 34;
int numberOfApples = 12;
decimal pricePerApple = 0.35M;

// String interpolation:
string saludoCompleto = $"Hello, {name}! Today is {date.DayOfWeek}, it's {date:HH:mm} now.";

// Composite formatting:
Console.WriteLine("Hello, {0}! Today is {1}, it's {2:HH:mm} now.", name, date.DayOfWeek, date);

// Para incluir una llave ("{" o "}"), use dos llaves ("{{" o "}}").
Console.WriteLine($"He asked, \"Is your name {name}?\", but didn't wait for a reply :-{{");
// He asked, "Is your name Mark?", but didn't wait for a reply :-{

// Para poder usar un operador condicional en una expresión de interpolación,
// incluya esa expresión entre paréntesis
Console.WriteLine($"{name} is {age} year{(age == 1 ? "" : "s")} old.");
// Expected output is:
// Mark is 34 years old.

// format strings
// https://docs.microsoft.com/en-us/dotnet/standard/base-types/formatting-types
Console.WriteLine(
    format: "{0} apples costs {1:C}",
    arg0: numberOfApples,
    arg1: pricePerApple * numberOfApples);
// 12 apples costs 4,20 €

string formatted = string.Format(
    format: "{0} apples costs {1:C}",
    arg0: numberOfApples,
    arg1: pricePerApple * numberOfApples);
// 12 apples costs 4,20 €


// Tabla formateada con format strings
string applesText = "Apples";
int applesCount = 1234;
string bananasText = "Bananas";
int bananasCount = 56789;
Console.WriteLine(
    format: "{0,-8} {1,6:N0}",
    arg0: "Name",
    arg1: "Count");
Console.WriteLine(
    format: "{0,-8} {1,6:N0}",
    arg0: applesText,
    arg1: applesCount);
Console.WriteLine(
    format: "{0,-8} {1,6:N0}",
    arg0: bananasText,
    arg1: bananasCount);

// Name      Count
// Apples    1.234
// Bananas  56.789
