// Los indizadores permiten las propiedades indizadas: propiedades 
// a las que se hace referencia mediante uno o más argumentos. 
// Estos argumentos proporcionan un índice en alguna colección de valores.

// declaración
public int this[string key]
{
    get { return storage.Find(key); }
    set { storage.SetAt(key, value); }
}

// uso
var item = someObject["key"];
someObject["AnotherKey"] = item;

