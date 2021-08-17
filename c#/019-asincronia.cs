// La palabra clave async convierte un método en un método asincrónico

// Cuando se aplica la palabra clave await, se suspende el método de llamada 
// y se cede el control al autor de la llamada hasta que se completa 
// la tarea esperada.

// await solo puede usarse dentro de un método asincrónico.

// Se usa para consumir recursos externos, para que la operación
// no bloquee la ejecución de nuestro programa

// Los métodos que la utilicen deben tener un tipo de retorno muy concreto.
// Los tipos de retorno que permite usar async son:
// void
// Task
// Task<T>

// https://docs.microsoft.com/es-es/dotnet/csharp/programming-guide/concepts/async/#start-tasks-concurrently
// https://www.netmentor.es/Entrada/programacion-asincrona

public async Task<Articulo> ConsultarArticulo(int id)
{
    return await _articuloRepository.GetArticulo(id);
}

// Ejecuta las instrucciones una por una y en orden, espera a que la primera 
// con el id 1 termine, para empezar la segunda y así sucesivamente.
Articulo articulo1 = await _articuloRepository.GetArticulo(1);
Articulo articulo2 = await _articuloRepository.GetArticulo(2);
Articulo articulo3 = await _articuloRepository.GetArticulo(3);

// Para ejecutar dichas acciones de forma asíncrona debemos llamar al método
// que devuelve Task, y una vez tenemos esta Task en una variable, hacer el await.
Task<Articulo> taskArticulo1 =  _articuloRepository.GetArticulo(1);
Task<Articulo> taskArticulo2 =  _articuloRepository.GetArticulo(2);
Task<Articulo> taskArticulo3 =  _articuloRepository.GetArticulo(3);

Articulo articulo3 = await taskArticulo3;
Articulo articulo2 = await taskArticulo2;
Articulo articulo1 = await taskArticulo1;

// Alternativamente al caso que acabamos de ver cuando tenemos múltiples tareas
//  para ejecutar. C# nos provee un método llamado Task.WhenAll(IEnumerable<Task>)
_ = Task.WhenAll(taskArticulo1, taskArticulo2, taskArticulo3);
Articulo articulo1 = taskArticulo1.Result;
Articulo articulo2 = taskArticulo2.Result;
Articulo articulo3 = taskArticulo3.Result;
