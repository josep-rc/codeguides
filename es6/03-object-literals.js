// old js

function getBook(title, author) {
    return {
        title: title,
        author: author
    }
}

var book = getBook('Harry Potter', 'JK');

console.log(book);


// ES6

function getBook2(title, author) {
    return {
        title,
        author
    }
}

var book2 = getBook2('Harry Potter', 'JK');

console.log(book2);
