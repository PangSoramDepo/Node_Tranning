const mongoose = require('mongoose');
const Joi = require('joi');

const authorSchema = new mongoose.Schema({
    name: {
        type: String,
        required: true
    },
    age: Number
});

const Posts = new mongoose.model('Post',new mongoose.Schema({
    title: {
        type: String,
        required: true,
        minlength: 5,
        maxlength: 20
    },
    category: {
        type: String,
        enum: ["Web","Mobile","Network"],
        lowercase: true,
        // uppercase: true,
        trim: true
    },
    author: {
        type: authorSchema,
        required: true
    },
    body: String,
}));

function validatePost(posts){
    const schema = {
        title : Joi.string().min(5).required(),
        body : Joi.allow(),
        author : Joi.allow()
    };
    return Joi.validate(posts,schema);
}

exports.Posts =  Posts;
exports.validate = validatePost;