const EventEmitter = require('events')

class Logger extends EventEmitter{
    log(message){
        console.log("-----Log----",message);
        this.emit('messageLogged',{id:2,url:"www.google.com"});
    }
}

module.exports = Logger