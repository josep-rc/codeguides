


void main(){

  // clase abstracta

  final perro = new Perro();
  final gato = Gato();

  perro.emitirSonido();
  gato.emitirSonido();

  // extends

  final superman = new Heroe();
  superman.nombre = 'Clark Kent';

  final luthor = new Villano();
  luthor.nombre = 'Lex Luthor';
}

abstract class Animal {
  int patas;

  void emitirSonido();
}

class Perro implements Animal{
  int patas;
  int colas;

  void emitirSonido() => print('GUUAAUUUU!!');
}

class Gato implements Animal{
  int patas;
  int colas;

  void emitirSonido() => print('MIIAAAAUUUUUUUUU!!');
}

class Personaje{
  String poder;
  String nombre;
}

class Heroe extends Personaje{
  // poder y nombre le vienen de Personaje
  //String poder;
  //String nombre;
  int valentia;
}

class Villano extends Personaje{
  int maldad;
}