// Tipos basicos por valor
// Declaro una variable
// Lss variables locales en minúscula
int num1 = 0;
/*
NOTA:
Los miembros se inicialitzen al valor per defecto (0)
Las variables locales no, se deben inicializar
*/
int num2; // Error

// Declaro una constante
const double PI = 3.141592;

// Tipos enteros
// https://docs.microsoft.com/es-es/dotnet/csharp/language-reference/builtin-types/integral-numeric-types
sbyte sb = 1;   // -128 a 127 (8 bits) System.SByte
byte b = 1;     // 0 a 255 (8 bits) System.Byte
short s = 1;    // -32768 a 32767 (16 bits) System.Int16
ushort us = 1;  // 0 a 65535 (16 bits) System.UInt16
int i = 1;      // -2.147.483.648 a 2.147.483.647 (32 bits) System.Int32
uint ui = 1;    // 0 a 4.294.967.295 (32 bits) System.UInt32
long l = 1;     // -9.223.372.036.854.775.808 a 9.223.372.036.854.775.807 (64 bits) System.Int64
ulong ul = 1;   // 0 a 18.446.744.073.709.551.615 (64 bits) System.UInt64

// Tipos con decimales
// https://docs.microsoft.com/es-es/dotnet/csharp/language-reference/builtin-types/floating-point-numeric-types
float f = 1;    // 6 a 9 dígitos aprox. (4 bytes) System.Single
double d = 1;   // 15 a 17 dígitos aprox (8 bytes) System.Double
decimal de = 1; // 28-29 dígitos (16 bytes) System.Decimal

System.Double sd = 12.3; // es lo mismo que double sd = 12.3;

// Las variables locales se pueden declarar con var
// Literales
var decimalLiteral = 42;
var hexLiteral = 0x2A;
var binaryLiteral = 0b_0010_1010; // separador de dígitos, es lo mismo que 0b00101010
uint separador = 45_123_012; // separador de dígitos, es lo mismo que 45123012
var longVar = 33L;
var ulongVar = 44UL;
double d = 3D;
float f = 3_000.5F;
decimal myMoney = 3_000.5m;
double d = 0.42e2; // 42
float f = 134.45E-2f; // 1.3445
decimal m = 1.5E6m; // 1500000

// Conversion
byte a = 13; // Conversion implicita, literal entero se convierte a byte (ojo overflow)
var signedByte = (sbyte)42; // Usando conversion explicita

// Boolean
bool check = true;

// Char
// Valor predeterminado: \0, es decir, U+0000
char j = 'j';
char j2 = '\u006A'; // unicode
char j3 = '\x006A'; // hexadecimal
char j4 = (char)106;

// Podemos hacer que cualquier variable de un tipo por valor
// pueda ser null
int? nullableInt = null;


