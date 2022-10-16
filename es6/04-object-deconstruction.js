// old js

var user = {
    name: "Josep",
    age: 25,
};

var myName = user.name;

console.log(myName);

// ES6

const list = {
    type: "Shopping list",
    items: ["Milk", "Cow"],
};

// variable rename items to shopingList
const { type, items: shopingList } = list;

console.log(type, shopingList);
