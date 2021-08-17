https://es.stackoverflow.com/questions/1650/qu%C3%A9-son-los-delegados-en-c
https://docs.microsoft.com/es-es/dotnet/csharp/programming-guide/delegates/#:~:text=Un%20delegado%20es%20un%20tipo,un%20tipo%20de%20valor%20devuelto.&text=Cuando%20se%20crea%20una%20instancia,un%20tipo%20de%20valor%20devuelto.
https://docs.microsoft.com/es-es/dotnet/csharp/programming-guide/delegates/using-delegates
https://www.netmentor.es/Entrada/delegados-csharp
https://www.youtube.com/watch?v=E1mOAWAuLRs&t=249s

// Un delegado es un tipo que representa referencias a métodos
// El delegado define la firma de los métodos enlazables
// Permite pasar métodos com parámetro
public void Saludo1()
{
    System.Console.WriteLine("Saludo1");
}
// Definimos el delegado
delegate void Saludo();

// Creamos una ref de tipo delegado(Saludo) que apunte
// a la función Saludo1 
Saludo SaludoDelegado = new Saludo(Saludo1);

// Ejecutamos el delegado
SaludoDelegado();

// Pasamos la función como callback
public void MetodoConCallback(Saludo cb)
{
    cb();
}
MetodoConCallback(SaludoDelegado);
