using System;

public class Person
{
    // Constructor that takes no arguments:
    public Person()
    {
        Name = "unknown";
    }

    // Constructor that takes one argument:
    public Person(string name)
    {
        Name = name;
    }

    string campoPrivado;

    // Auto-implemented readonly property:
    public string Name { get; }


    // inicialización de la propiedad a un valor
    // distinto del predeterminado
    public string FirstName { get; set; } = string.Empty;

    // definiendo nuestro propio almacenamiento
    private string firstName;
    public string FirstName
    {
        get { return firstName; }
        set { firstName = value; }
    }

    // Si es una expresión única se pueden usar
    // miembros con forma de expresión
    private int _sample;
    public int Sample
    {
        // Return the value stored in a field.
        get => _sample;
        // Store the value in the field.
        set =>  _sample = value;
    }

    // Validación
    public string FirstName
    {
        get => firstName;
        set
        {
            if (string.IsNullOrWhiteSpace(value))
                throw new ArgumentException("First name must not be blank");
            firstName = value;
        }
    }

    // solo lectura con setter privado
    public string FirstName { get; private set; }

    // propiedades calculadas
    public string FullName { get { return $"{FirstName} {LastName}"; } }
    // idem
    public string FullName => $"{FirstName} {LastName}";

    // Method that overrides the base class (System.Object) implementation.
    public override string ToString()
    {
        return Name;
    }

    public int SampleMethod(string sampleParam){}
}

// Call the constructor that has no parameters.
var person1 = new Person();
Console.WriteLine(person1.Name); // unknown

// Call the constructor that has one parameter.
var person2 = new Person("Sarah Jones");
Console.WriteLine(person2.Name); // Sarah Jones
// Get the string representation of the person2 instance.
Console.WriteLine(person2); // Sarah Jones

// llama al constructor sin params
// y asigna las propiedades, que no 
// podran ser de sólo lectura
Person person3 = new Person{
    Name = "Josep",
    Sample = 33
};

// Modificadores de acceso
// -public:
// Puede obtener acceso al tipo o miembro cualquier otro código
// del mismo ensamblado o de otro ensamblado que haga referencia a éste.
// -private:
// Solamente puede obtener acceso al tipo o miembro el código de la misma clase.
// -protected:
// Solamente puede obtener acceso al tipo o miembro el código de la misma clase 
// o de una clase derivada.
// -internal:
// Puede obtener acceso al tipo o miembro cualquier código del mismo ensamblado,
// pero no de un ensamblado distinto.
// -protected: internal	
// Puede obtener acceso al tipo o miembro cualquier código del mismo ensamblado
// o cualquier clase derivada de otro ensamblado.
// -private protected:
// Un código de la misma clase o de una clase derivada dentro del ensamblado 
// de clase base puede acceder al tipo o miembro en cuestión.

// static
// Un miembro estático de la clase es una propiedad,
// un procedimiento o un campo que comparten todas las instancias de una clase.
static class SampleClass
{
    public static string SampleString = "Sample String";
}
Console.WriteLine(SampleClass.SampleString);
/*
Las clases estáticas en C# solo tienen miembros estáticos
y no se puede crear una instancia de ellas. 
Además, los miembros estáticos no pueden tener acceso a las propiedades,
los campos o los métodos no estáticos.
*/

// Herencia
public class Empleado : Person{}
// Para especificar que una clase no se puede usar como clase base:
public sealed class A { }
// Para especificar que una clase se puede usar solo como clase base
// y no se pueden crear instancias de esta:
public abstract class B { }

// -virtual:	Permite invalidar un miembro de una clase derivada.
// -override:	Invalida un miembro virtual (invalidable) definido en la clase base.
// -abstract:	Requiere que se invalide un miembro de clase en la clase derivada.
// -new (modificador):	Oculta un miembro heredado de una clase base.

// metodos
abstract class Motorcycle
{
    // Anyone can call this.
    public void StartEngine() {}

    // Only derived classes can call this.
    protected void AddGas(int gallons) {}

    // Derived classes can override the base class implementation.
    public virtual int Drive(int miles, int speed) {}

    // Derived classes must implement this.
    public abstract double GetTopSpeed();
}

class TestMotorcycle : Motorcycle
{
    // parámetros con nombre
    public override int Drive(int miles, int speed)
    {
        return (int) Math.Round( ((double)miles) / speed, 0);
    }
}
TestMotorcycle moto = new TestMotorcycle();
moto.StartEngine();
moto.AddGas(15);
// llamada con argumentos con nombre
var travelTime = moto.Drive(speed: 60, miles: 170);

// Cuando un tipo de valor se pasa a un método por valor,
// se pasa una copia del objeto y no el propio objeto. Por lo tanto,
// los cambios realizados en el objeto en el método llamado 
// no tienen ningún efecto en el objeto original cuando el control 
// vuelve al autor de la llamada.

// Pase un parámetro por referencia cuando quiera cambiar el valor 
// de un argumento en un método y reflejar ese cambio cuando el 
// control vuelva al método de llamada. Para pasar un parámetro 
// por referencia, use la palabra clave ref o out. También puede 
// pasar un valor por referencia para evitar la copia, pero impedir 
// modificaciones igualmente usando la palabra clave in.

public class Example
{
    public static void Main()
    {
        int value = 20;
        Console.WriteLine("In Main, value = {0}", value);
        ModifyValue(ref value);
        Console.WriteLine("Back in Main, value = {0}", value);
    }

    static void ModifyValue(ref int i)
    {
        i = 30;
        Console.WriteLine("In ModifyValue, parameter value = {0}", i);
        return;
    }
}
// The example displays the following output:
//      In Main, value = 20
//      In ModifyValue, parameter value = 30/ 
//      Back in Main, value = 30

// params para indicar que un parámetro es una matriz de parámetros
//  permite llamar al método con un número variable de argumentos
static string GetVowels(params string[] input);
GetVowels(new[] { "apple", "banana", "pear" });
GetVowels("apple", "banana", "pear");
GetVowels();

// Parámetros opcionales
public void ExampleMethod(
    int required, 
    int optionalInt = default(int),
    string description = "Optional Description"){}
var opt = new Options();
opt.ExampleMethod(10);
opt.ExampleMethod(10, 2);
opt.ExampleMethod(12, description: "Addition with zero:");

// Método que devuelve una tupla
public (string, string, string, int) GetPersonalInfo(string id)
{
    PersonInfo per = PersonInfo.RetrieveInfoById(id);
    return (per.FirstName, per.MiddleName, per.LastName, per.Age);
}
var person = GetPersonalInfo("111111111")
Console.WriteLine("{person.Item1} {person.Item3}: age = {person.Item4}");

// Miembros con forma de expresión
// Cuando sólo tienen una instrucción
public Point Move(int dx, int dy) => new Point(x + dx, y + dy);
public void Print() => Console.WriteLine(First + " " + Last);
// Works with operators, properties, and indexers too.
public static Complex operator +(Complex a, Complex b) => a.Add(b);
public string Name => First + " " + Last;
public Customer this[long id] => store.LookupCustomer(id);
