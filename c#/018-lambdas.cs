// Las expresiones lambda son funciones anónimas
// Se usan para crear delegados inline, para expresiones LINQ, etc...
// Operador lambda: =>

public delegate int MathOperation(int num);

MathOperation cuadrado = new MathOperation(num => num*num);

System.Console.WriteLine(cuadrado(3));

// Es lo mismo que:

MathOperation cuadrado = new MathOperation(Cuadrado);
public int Cuadrado(int num)
{
  return num * num;
}
