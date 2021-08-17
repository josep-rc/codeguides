// https://docs.microsoft.com/es-es/dotnet/csharp/programming-guide/concepts/collections

// Las colecciones proporcionan una manera más flexible de
// trabajar con grupos de objetos. A diferencia de las
// matrices, el grupo de objetos con el que trabaja puede 
// aumentar y reducirse de manera dinámica

// Si la colección contiene elementos de un solo tipo de datos,
//  puede usar una de las clases del espacio de nombres 
// System.Collections.Generic.

// Create a list of strings.
var salmons = new List<string>();
salmons.Add("chinook");
salmons.Add("coho");
salmons.Add("pink");
salmons.Add("sockeye");


// Create a list of strings by using a
// collection initializer.
var salmons2 = new List<string> { "chinook", "coho", "pink", "sockeye" };

// Iterate through the list.
foreach (var salmon in salmons)
{
    Console.Write(salmon + " ");
}
// Output: chinook coho pink sockeye
// usando for
for (var index = 0; index < salmons.Count; index++)
{
    Console.Write(salmons[index] + " ");
}

// Remove an element from the list by specifying
// the object.
salmons.Remove("coho");
// Quita elemento por su índice
salmons.RemoveAt(index);

// Para el tipo de elementos de List<T>, también puede definir
// su propia clase. En el ejemplo siguiente, la clase Galaxy que
// usa List<T> se define en el código.
private static void IterateThroughList()
{
    var theGalaxies = new List<Galaxy>
        {
            new Galaxy() { Name="Tadpole", MegaLightYears=400},
            new Galaxy() { Name="Pinwheel", MegaLightYears=25},
            new Galaxy() { Name="Milky Way", MegaLightYears=0},
            new Galaxy() { Name="Andromeda", MegaLightYears=3}
        };

    foreach (Galaxy theGalaxy in theGalaxies)
    {
        Console.WriteLine(theGalaxy.Name + "  " + theGalaxy.MegaLightYears);
    }

    // Output:
    //  Tadpole  400
    //  Pinwheel  25
    //  Milky Way  0
    //  Andromeda  3
}

public class Galaxy
{
    public string Name { get; set; }
    public int MegaLightYears { get; set; }
}

// Las consultas LINQ proporcionan capacidades
// de filtrado, ordenación y agrupación.
// https://docs.microsoft.com/es-es/dotnet/csharp/programming-guide/concepts/linq/

private static void ShowLINQ()
{
    List<Element> elements = BuildList();

    // LINQ Query.
    var subset = from theElement in elements
                where theElement.AtomicNumber < 22
                orderby theElement.Name
                select theElement;

    foreach (Element theElement in subset)
    {
        Console.WriteLine(theElement.Name + " " + theElement.AtomicNumber);
    }

    // Output:
    //  Calcium 20
    //  Potassium 19
    //  Scandium 21
}

private static List<Element> BuildList()
{
    return new List<Element>
    {
        { new Element() { Symbol="K", Name="Potassium", AtomicNumber=19}},
        { new Element() { Symbol="Ca", Name="Calcium", AtomicNumber=20}},
        { new Element() { Symbol="Sc", Name="Scandium", AtomicNumber=21}},
        { new Element() { Symbol="Ti", Name="Titanium", AtomicNumber=22}}
    };
}

public class Element
{
    public string Symbol { get; set; }
    public string Name { get; set; }
    public int AtomicNumber { get; set; }
}
