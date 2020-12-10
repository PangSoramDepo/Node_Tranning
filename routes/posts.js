const mongoose = require('mongoose');
const express = require('express');
const router = express.Router();
const Joi = require('joi');

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
    body: String,
}));

router.get('/',async (req,res)=>{
    const posts = await Posts.find().sort('-title');
    res.send(posts);
});

router.get('/:id',async (req,res)=>{
    const posts = await Posts.findById(req.params.id);
    if (!posts) return res.status(404).send(`The post with the given ID ${req.params.id} not found`);
    res.send(posts);
});

router.post('/',async (req,res)=>{
    const {error} = validatePost(req.body); // error = result.error (Object Destructuring)
    if(error) return res.status(400).send(error.details[0].message);

    let post = new Posts({
        title: req.body.title,
        body: req.body.body
    });
    post = await post.save();
    res.send(post);
});

router.put('/:id',async (req,res)=>{
    const {error} = validatePost(req.body); // error = result.error (Object Destructuring)
    if(error) return res.status(400).send(error.details[0].message);

    let post = await Posts.findByIdAndUpdate(req.params.id,{
        title: req.body.title,
        body: req.body.body
    },{ new: true });
    if(!post) return res.status(404).send("The post with the given ID not found...");
    res.send(post);
});

router.delete('/:id',async (req,res)=>{
    let post = await Posts.findByIdAndRemove(req.params.id);
    if (!post) return res.status(404).send(`The post with the given ID ${req.params.id} not found`);
    res.send(post); 
});

function validatePost(posts){
    const schema = {
        title : Joi.string().min(3).required(),
        body : Joi.allow()
    };
    return Joi.validate(posts,schema);
}

module.exports = router;