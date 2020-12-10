const mongoose = require('mongoose');
const express = require('express');
const app = express();
const posts = require('./routes/posts');

mongoose.connect('mongodb://localhost/express_1',{ useNewUrlParser: true, useUnifiedTopology: true, useFindAndModify: false})
    .then(()=>console.log("Connect..."))
    .catch((err)=> console.log("Error : ",err.message));

app.use(express.json());
app.use('/api/posts',posts);

app.listen(3000,()=>console.log("Listening on port 3000..."));