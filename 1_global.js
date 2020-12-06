//***When you use this function in browser in depend on window object

console.log(); //can be window.console.log();

setTimeout(); //can be window.setTimeout();
clearTimeout(); //can be window.clearTimeout();

setInterval(); //can be window.setInterval();
clearInterval(); //can be window.clearInterval();

var message=""; // And when you declare varible it also available on window object too in browser
window.message  //So you can access the varible throught windows object

/* But you must know in node js dosen't have window object but it's have global object */

console.log(); //can be global.console.log();

setTimeout(); //can be global.setTimeout();
clearTimeout(); //can be global.clearTimeout();

setInterval(); //can be global.setInterval();
clearInterval(); //can be global.clearInterval();

// ----------Note----------
var message=""; // And when you declare varible it not available on global object in node js
global.message  //So you these will return undefine varible