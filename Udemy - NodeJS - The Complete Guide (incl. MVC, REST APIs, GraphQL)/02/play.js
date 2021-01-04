var name = 'mohey';
var age = 25;
function names1(age, name) {

    return (
        'name is ' + name + ' ,age is ' + age
    );

}
// console.log(names1(age,name));
/* another way to define function will be */
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
/* another way to do it */

const adds = (a, b) => a + b;
const add1 = a => a + 1;

/* object */

const person = {
    name: 'mohey',
    age: 25,
    greetfunction() {
        console.log('hi, i am ' + this.name);
    }

};

person.greetfunction();


/* arrays */


const hobbies = ['Sports', 'Cooking'];
for (let hobby of hobbies) {
    console.log(hobby);
}
console.log(hobbies.map(hobby => 'Hobby: ' + hobby));
console.log(hobbies);

/* async-code */

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

