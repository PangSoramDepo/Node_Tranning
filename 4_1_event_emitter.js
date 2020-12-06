const EventEmitter = require('events');
const emitter = new EventEmitter();

// Noted --> Register Listener must be declare or register before raise an event (Emit)

// Register Listener || anonymouse function can be declare with parameters
emitter.on('messageLogged',args =>{
    console.log("Hello ",args);
});

// Raise an event || you also can pass data when raise an event
emitter.emit('messageLogged',{id:1,name:"popo"});