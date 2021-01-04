

# about the js

1. weakly Typed programming language
no need to explicit type
data can be switched dynamically

2. object-oriented language
data can be organized in the logical object 

3. versatile language

## functions 

the normal function looks like that
```js

function names1(age, name) {

    return (
        'name is ' + name + ' ,age is ' + age
    );

}
```
another way to define function will be add const then function 
```js
const names2 = function (age, name) {
    return (
        'name is ' + name + ' ,age is ' + age
    );
}
const names = (age, name) => {
    return (
        'name is ' + name + ' ,age is ' + age
    );

};
```
the course way and another way throw arrow fuctions 
```js
const names = (age, name) => {
    return (
        'name is ' + name + ' ,age is ' + age
    );

};
/* another way to do it */

const adds = (a, b) => a + b;
const add1 = a => a + 1;
```
### objects key value 
```js
const person = {
    name: 'mohey',
    age: 25,
    greetfunction() {
        console.log('hi, i am ' + this.name);
    }

};
```

arrays 

```js 

/* arrays */


const hobbies = ['Sports', 'Cooking']; // const refer to the hobbies array not what it's inside
for (let hobby of hobbies) {
    console.log(hobby);
}
console.log(hobbies.map(hobby => 'Hobby: ' + hobby));
hobbies.push('Programming'); // will add even with const array as it referee to it not what in side are const
const coppiedArray = hobbies.slice(); // copy array 
```

## spread 

take the old array values make new one and add to it
```js
const copiedPerson = { ...person };
const coppiedArray = [...hobbies];  //
```
it's just + - the thing we gonna add
it takes all elements from the after ... and add it to the [ ] or { } 

## rest 

```js

const toArray = (...args) => {
  return args;
};

console.log(toArray(1, 2, 3, 4));
```
it's used to merge items into array 

---

## Destructuring 

```js
const foo = ['one', 'two', 'three'];

const [red, yellow, green] = foo;
console.log(red); // "one"
console.log(yellow); // "two"
console.log(green); // "three"
```

## async-code
it doesnt finish directly but take some time to finish 
js doent block the code for them just move on to the next and return to it if it's done 
```js
const fetchData = () => {
  const promise = new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve('Done!');
    }, 1500);
  });
  return promise;
};

setTimeout(() => {
  console.log('Timer is done!');
  fetchData()
    .then(text => {
      console.log(text);
      return fetchData();
    })
    .then(text2 => {
      console.log(text2);
    });
}, 2000);

console.log('Hello!');
console.log('Hi!');
```

---

the start of the course 

`http.createServer();`
takes 