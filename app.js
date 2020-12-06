// var _ = require('underscore')
// var os = require('os');
// var macaddress = require('macaddress');

// var result=_.contains([1,2,3],2);
// console.log(result);
// console.log(process.platform);
// console.log(process.arch);
// var versionString = require('child_process').execSync('ver').toString().trim();
// console.log(versionString);
// console.log(versionString.split(" ")[3].split(".")[0]);
// console.log(os.networkInterfaces());
// macaddress.one(function (err, mac) {
//     console.log("Mac address for this host: %s", mac);  
// });
//dol video 5 --> 1

// let commands=['start explorer','start cmd'];
// let command='start cmd';
// console.log(commands.includes(command));

// const fs = require('fs');

// fs.appendFile('mynewfile3.txt', 'Hello content!\r\n', function (err) {
//     if (err) throw err;
//     console.log('Saved!');
//   });

// var dateTime = require('node-datetime');
// var dt = dateTime.create();
// var formatted = dt.format('d-m-Y H:M:S');
// console.log(formatted);

const dic={"start explorer":"Open Explorer","start cmd":"Open Command Line"};
console.log(dic);
console.log(Object.values(dic));
console.log(Object.keys(dic));
console.log(dic['start explorer']);