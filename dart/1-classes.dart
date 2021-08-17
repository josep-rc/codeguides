import 'dart:convert';

void main() {
  
  final logan = new Heroe( 
    poder: 'Regeneración',
    nombre: 'Logan'
  );
    
  print( logan );

  final rawJson = '{ "nombre": "Icecream", "poder": "Congelar"}';
  final Map parsedJson = json.decode(rawJson);

  final icecream = Heroe.fromJson(parsedJson);

  print(icecream);

  
}

class Heroe {
  
  String nombre;
  String poder;
  
    // Contructor
//   Heroe({ String nombre = 'Sin Nombre', String poder }) {
//     this.nombre = nombre;
//     this.poder  = poder; 
//   }
  
  // Constructor simplificado
  Heroe({ this.nombre, this.poder });

  // Constructor con nombre
  Heroe.fromJson(Map parsedJson){
    nombre = parsedJson['nombre'];
    poder  = parsedJson['poder'];
  }
  
  // Sobreescribo el método toString
  String toString() => 'nombre: $nombre - poder: $poder';
  
}