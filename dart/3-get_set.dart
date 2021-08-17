
void main() {

  final cuadrado = Cuadrado();

  cuadrado..lado = 10;

  print(cuadrado);
  print('area: ${cuadrado.area}');

}



class Cuadrado {

  double _lado; // propiedad privada perq va precedida de _

  set lado(double valor) {
    if(valor <= 0){
      throw('El lado no puede ser menor o igual a 0');
    }
    _lado = valor;
  }

  /*
    double get area {
      return _lado * _lado;
    }
  */

  double get area => _lado * _lado;

  toString() => 'Lado: $_lado';

}