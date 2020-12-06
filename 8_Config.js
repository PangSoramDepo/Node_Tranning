const config = require('config');

console.log(`Server Name : ${config.get('name')}`);
console.log(`Mail : ${config.get('mail.host')}`);