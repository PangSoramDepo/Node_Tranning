// In node have at least 1 file and 1 module 

// In case in file logger.js use ---->  module.exports.log=log;

// const logger = require('./logger');
// logger.log("Hello");

// In case in file logger.js use ---->  module.exports=log;
const log = require('./logger');
log("Hello");
console.log(__filename);
console.log(__dirname);
console.log(module);