const Logger = require('./4_2_event')
const logger = new Logger();

logger.on('messageLogged',args => {
    console.log('Event Raise ',args);
});

logger.log("This is log");