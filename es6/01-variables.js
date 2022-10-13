// old js

var myName = "Josep";

myName = "Montse";

// problema. Redeclaración de variable no da error
var name = "Carla";

function sayName() {
  // el scope de una variable es su funcion o el objeto global
  var name2 = "Maria";
  console.log(name2);
}

//console.log(name2); // error, name2 is not defined

sayName();

// ES6

// declaracion de constante
const todoList = ["Patatas", "Manzanas"];

// todoList = []; // error, no se puede reasignar una constante

let cont = 0;

cont = 10;

// let cont = 0; // error, variable ya declarada

// el scope de una variable o constante esta definido por los {} donde se define

for (let i = 0; i < todoList.length; i++) {
  console.log(i);
}

// console.log(i); // error, i is not defined

// multiline declaration
let firstName = "Nathan",
  age = 28,
  message = "Hello there!";

// use destructuring assignment
const [firstName2, age2, message2] = ["Nathan", 28, "Hello there!"];
console.log(firstName2); // "Nathan"
console.log(age2); // 28
console.log(message2); // "Hello there!"

// ignore some variables
const [a, , b] = [1, 2, 3];
// a will return 1
// b will return 3
