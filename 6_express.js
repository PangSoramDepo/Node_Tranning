const Joi = require('joi');
const express = require('express');
const app = express();
const log = require('./7_middleware');

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

const courses = [
    { id:1, name:"course1"},
    { id:2, name:"course2"},
    { id:3, name:"course3"},
];

app.get('/',(req,res) => {
    res.render('index',{title:'My Express App',message:'Hello'});
});

app.get('/api/courses',(req,res)=>{
    res.send(courses);
});

app.get('/api/courses/:id',(req,res)=>{
    const course  = courses.find(c=>c.id==parseInt(req.params.id));
    if (!course) return res.status(404).send(`The course with the given ID ${req.params.id} not found`);
    res.send(course);
});

app.post('/api/courses',(req,res) => {
    const {error} = validateCourse(req.body); // error = result.error (Object Destructuring)
    if(error) return res.status(400).send(error.details[0].message);

    const course = {
        id: courses.length+1,
        name: req.body.name
    };
    courses.push(course);
    res.send(course);
});

app.put('/api/courses/:id',(req,res)=>{
    const course  = courses.find(c=>c.id==parseInt(req.params.id));
    if (!course) return res.status(404).send(`The course with the given ID ${req.params.id} not found`);
    
    const {error} = validateCourse(req.body); // error = result.error (Object Destructuring)
    if(error) return res.status(400).send(error.details[0].message);
    course.name=req.body.name;
    res.send(course);
});

app.delete('/api/courses/:id',(req,res)=>{
    const course  = courses.find(c=>c.id==parseInt(req.params.id));
    if (!course) return res.status(404).send(`The course with the given ID ${req.params.id} not found`);
    
    const index = courses.indexOf(course);
    courses.splice(index,1);

    res.send(course); 
});

function validateCourse(course){
    const schema = {
        name : Joi.string().min(3).required()
    };
    return Joi.validate(course,schema);
}

app.listen(3000,()=>console.log("Listen To Port 3000"));