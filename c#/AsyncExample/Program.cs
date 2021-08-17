using System;
using System.Threading.Tasks;

namespace AsyncExample
{
  class Program
  {
    static async Task Main(string[] args)
    {
      DateTime inicio = DateTime.Now;
      var tarea1 = Tarea1();
      var tarea3 = Tarea3();
      await tarea1;
      Tarea2();
      await tarea3;
      DateTime fin = DateTime.Now;
      TimeSpan demora = new TimeSpan(fin.Ticks - inicio.Ticks);
      System.Console.WriteLine(demora.ToString());
    }

    private static async Task Tarea1()
    {
      System.Console.WriteLine("Tarea1 iniciada");
      await Task.Delay(3000);
      System.Console.WriteLine("Tarea1 finalizada");
    }

    private static void Tarea2()
    {
      System.Console.WriteLine("Tarea2 iniciada");
      Task.Delay(1000).Wait();
      System.Console.WriteLine("Tarea2 finalizada");
    }

    private static async Task Tarea3()
    {
      System.Console.WriteLine("Tarea3 iniciada");
      await Task.Delay(5000);
      System.Console.WriteLine("Tarea3 finalizada");
    }
  }
}
