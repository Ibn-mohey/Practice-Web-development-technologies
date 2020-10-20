// function sayhello(name) {
//   console.log('Hello ' +  name)
//
// }
//
// sayhello('abdo');
//
// //
// function sayhello(name) {
//   console.log('Hello ' +  name)
//
// }
//
// console.log();  // the global object
//
// setTimeout()
// clearTimeout()
// setInterval()
// clearInterval()
//

// var logger  = require('./logger');
//
// // logger.mmlogg('asd')
//
// logger('messagegg')
//
//
// const path = require('path')
// var pathobj = path.parse(__filename)
// console.log(pathobj)

const os = require('os');

var totalmemory = os.totalmem();
var freememory = os.freemem();

console.log(`Tolal Memory ${totalmemory}`);
console.log(`Tolal Memory ${freememory}`);
