// console.log('from index.js');
let names = 'mohey';

console.log(names);

//  cannot be a reserved keywords or i will get an error 
//  meaningfull
//  cnnot start with a number
//  connat contain space or -
//camel notation smalUpper
// are case sensitve 

let firstName2 = 'one' ,lastname2 = 'two';
// or 
let firstName = 'one';
let lastname = 'two';

// constants 
const name = 'cant change name';
// types of variables (string - numbers - boolean - undefined - null )

// refrence types  (Object - array - functions )
let person = {
    name: 'mohey',
    age: 30

};
console.log(person)

// accsess with dot
person.name = 'new'

console.log(person)
// accsess with braket
person['name'] = 'new2'

console.log(person)

let selection = 'name';
person[selection] = 'new3'

console.log(person)

// array 
let arrayy = ['red','blue'];

console.log(arrayy);

console.log(arrayy[0]);

console.log(arrayy.length);

//fuction 

function greet1(){
    console.log('hello');
}

greet1();


function greet2(name, par2){
    console.log('hello' + name + par2);
}

greet2('mmmm','kk');

greet2('nnn');

