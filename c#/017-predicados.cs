// Los predicados son delegados que devuelven true o false
// Muy usados para filtrar colecciones

static bool DamePares(int num)
{
  if(num % 2 == 0) return true;
  else return false;
}

// Creo una lista de enteros
List<int> listaNumeros = new List<int>();

// Llenamos la lista
listaNumeros.AddRange(new int[]{1,2,3,4,5,6,7,8,9,10});

// Declaramos predicado
Predicate<int> PredicadoPares = new Predicate<int>(DamePares);

// Creamos la lista para guardar los pares
List<int> numPares = listaNumeros.FindAll(PredicadoPares);
