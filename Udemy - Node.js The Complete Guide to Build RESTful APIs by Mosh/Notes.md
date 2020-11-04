

#install node

it used to build API


check version

`node --version`


in node we dont have window or document objects to deal with files but we have another ones

`window is not defined`
##node  is
run time environment like chrome
have different object different from the ones in js code
have JavaScript engine + some modules not available inside browser
```js
fs.readFile()
http.creatServer()

```
###why node is scalable

####Non-blocking or asynchronous
same person serve many people doesn't have to wait till the order is done
a single thread handle multiple requests
####blocking or asynchronous
person wait for the order is done
single thread wait for each request to be done before handle next one

####tip
not good for the application with a lot of calculation like video encoding
use for data intensive and real time application

####tip
in node we dont have the window or document object

##node module system

##global object

```js
global.setTimeout()
```
```js
console.log() is // global object
// other global
setTimeout()
clearTimeout()
setInterval()
clearInterval()
```

in browser we have window represent our global scope
```js
window // represent our global scope
window.console.log()
```

we delcear variable

```js
var message = '';
```
will be alos avialbe by the window object
in node global comes to replce windwo

```js
global.console.log()
```
the variable ```js
var message = '';
```
is not added to the golbal object

every file is considred a module
every function in that file is a scope of that file
they are private
not avilable out side the container or the module
if we want  that fun we need to export it and make it public

```js
console.log(module);
```

what we get

`
Module {
  id: '[eval]',
  path: '.',
  exports: {},
  parent: undefined,
  filename: 'E:\\career\\Dataa\\github\\web-development-courses\\Udemy - Node.js The Complete Guide to Build RESTful APIs by Mosh\\first node program\\[eval]',
  loaded: false,
  children: [],
  paths: [
    'E:\\career\\Dataa\\github\\web-development-courses\\Udemy - Node.js The Complete Guide to Build RESTful APIs by Mosh\\first node program\\node_modules',
    'E:\\career\\Dataa\\github\\web-development-courses\\Udemy - Node.js The Complete Guide to Build RESTful APIs by Mosh\\node_modules',
    'E:\\career\\Dataa\\github\\web-development-courses\\node_modules',
    'E:\\career\\Dataa\\github\\node_modules',
    'E:\\career\\Dataa\\node_modules',
    'E:\\career\\node_modules',
    'E:\\node_modules'
  ]
}
`


creat and load a model

creat model for loger message
```js
console.log(module);
```
any thing added to `  exports: {},` will be avilabe out of this module
```js
// console.log(module);
var url='http://any.any/log'

function loggg(message){

 console.log(message)

}
```
to export what we need from them add them to export

```js
module.exports.log = loggg;
module.exports.endpointtt = url;
```

load the module

```js
require('./logger')
```
it returens the objects that are exported from that module

```js
var funloggers  = require('./logger')


funloggers.logg('messagegg') // calit

```


it's better to assign the fuction to constant

```js
cons funloggers  = require('./logger')


funloggers.logg('messagegg') // calit
```

we can chek using
`jshint`
to scan that error with constant

if we want to export asingle function
```js
var url='http://any.any/log'

function funloger(message){

 console.log(message)

}

module.exports = funloger;

```
#file system
