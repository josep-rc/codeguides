

void main() async{
  print('estamos a punto de pedir datos');

  String data = await httpGet('http://api.nasa.com/aliens');

  print(data);

  print('Ultima línea');
}

/* Salida
*   estamos a punto de pedir datos
*   Hola Mundo
*   Ultima línea
*/


Future<String> httpGet(String url) {
  return Future.delayed(new Duration(seconds: 4), (){
    return 'Hola Mundo';
  });
}