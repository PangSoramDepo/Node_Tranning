const express = require('express');
const app = express();
const log = require('./middleware/7_middleware');
const courses = require('./routers/courses');
const home = require('./routers/home');

//Template Engine
app.set('view engine','pug');
app.set('views','./views');

//Build In Middle Ware
app.use(express.json());
app.use(express.urlencoded({extended : true}));
app.use(express.static('public')); //Can read file readme in public folder without enter slug public

// Custom Middle Ware
app.use(log);

app.use((req,res,next)=>{
    console.log("Authenticate...");
    next();
});

//Call Route
app.use('/',home);
app.use('/api/courses',courses);


app.listen(3000,()=>console.log("Listen To Port 3000"));