

void main(){
  print('estamos a punto de pedir datos');

  httpGet('http://api.nasa.com/aliens').then((data){
    print(data);
  });

  print('Ultima línea');
}

/* Salida
*   estamos a punto de pedir datos
*   Ultima línea
*   Hola Mundo
*
*/


Future<String> httpGet(String url) {
  return Future.delayed(new Duration(seconds: 4), (){
    return 'Hola Mundo';
  });
}