// Recorrer en iteración todo el contenido de una colección
foreach (var item in collection)
{
    Console.WriteLine(item.ToString());
}

// Foreach depende de IEnumerable<T> e IEnumerator<T>
// Un método de iterador define cómo generar los objetos de
// una secuencia cuando se solicita. Para definir un método 
// de iterador se usan las palabras clave contextuales yield return.
public IEnumerable<int> GetSingleDigitNumbers()
{
    int index = 0;
    while (index < 10)
        yield return index++;
}
