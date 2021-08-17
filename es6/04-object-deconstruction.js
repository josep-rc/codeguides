// old js

var user = {
    name: 'Josep',
    age: 25
};

var myName = user.name;

console.log(myName);


// ES6

const list = {
    name: 'Shopping list',
    items: ['Milk', 'Cow']
}

const {name, items} = list;

console.log(name, items)

