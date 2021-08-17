using System;


Console.Write("Enter a character: ");
char ch = (char)Console.Read();

if (Char.IsUpper(ch))
{
    Console.WriteLine("The character is an uppercase letter.");
}
else if (Char.IsLower(ch))
{
    Console.WriteLine("The character is a lowercase letter.");
}
else if (Char.IsDigit(ch))
{
    Console.WriteLine("The character is a number.");
}
else
{
    Console.WriteLine("The character is not alphanumeric.");
}

// Pattern matching (patron de tipo)
object o = "3";
int j = 4;
if(o is int i) // solo entra si o es int
{
    // accedemos al valor de o mediante i
    // sabiendo que es un int
    Console.WriteLine($"{i} x {j} = {i * j}");
}
else
{
    Console.WriteLine("o no es un entero, no se puede multiplicar");
}

// switch
Random rnd = new Random();
int caseSwitch = rnd.Next(1,4);

switch (caseSwitch)
{
    case 1:
        Console.WriteLine("Case 1");
        break;
    case 2:
    case 3:
        Console.WriteLine($"Case {caseSwitch}");
        break;
    default:
        Console.WriteLine($"An unexpected value ({caseSwitch})");
        break;
}

// switch pattern matching
switch (shape)
{
    case Square s: // si es un Square
        return s.Side * s.Side;
    case Circle c: // si es un Circle
        return c.Radius * c.Radius * Math.PI;
    case Rectangle r: // si es un Rectangle
        return r.Height * r.Length;
    default:
        throw new ArgumentException(
            message: "shape is not a recognized shape",
            paramName: nameof(shape));
}

// clausula when
switch (shape)
{
    case Square s when s.Side == 0:
    case Circle c when c.Radius == 0:
        return 0;

    case Square s:
        return s.Side * s.Side;
    case Circle c:
        return c.Radius * c.Radius * Math.PI;
    default:
        throw new ArgumentException(
            message: "shape is not a recognized shape",
            paramName: nameof(shape));
}

// switch expressions a partir ce c#8
int caso = 3;
string message = caso switch
{
    1 => "Caso 1", // si caso es 1
    2 => "Caso 2",
    3 => "Caso 3",
    _ => "No hay caso" // si caso no es ni 1 ni 2 ni 3 (default)
};
// message = "Caso 3"
