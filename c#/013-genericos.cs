// Los genéricos introducen el concepto de parámetros de tipo

// Declare the generic class.
public class GenericList<T>
{
    public void Add(T input) { }
}
class TestGenericList
{
    private class ExampleClass { }
    static void Main()
    {
        // Declare a list of type int.
        GenericList<int> list1 = new GenericList<int>();
        list1.Add(1);

        // Declare a list of type string.
        GenericList<string> list2 = new GenericList<string>();
        list2.Add("");

        // Declare a list of type ExampleClass.
        GenericList<ExampleClass> list3 = new GenericList<ExampleClass>();
        list3.Add(new ExampleClass());
    }
}

// -Use tipos genéricos para maximizar la reutilización del código,
// la seguridad de tipos y el rendimiento.
// -El uso más común de los genéricos es crear clases de colección.
// -La biblioteca de clases de .NET contiene varias clases de 
// colección genéricas en el espacio de nombres System.Collections.Generic.
// -Estas se deberían usar siempre que sea posible en lugar de clases 
// como ArrayList en el espacio de nombres System.Collections.
// -Puede crear sus propias interfaces, clases, métodos, eventos y
// delegados genéricos.
// -Puede limitar las clases genéricas para habilitar el acceso a
// métodos en tipos de datos determinados.
// -Puede obtener información sobre los tipos que se usan en un tipo
// de datos genérico en tiempo de ejecución mediante la reflexión.
