const startupDebugger   =   require('debug')('app:startup');
const dbDebugger        =   require('debug')('app:db');

startupDebugger("Start Up Bart...");
dbDebugger("DB Debug bart...");

// debug=app:db node 9_debug.js