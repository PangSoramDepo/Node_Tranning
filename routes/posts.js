const mongoose = require('mongoose');
const express = require('express');
const router = express.Router();

const Posts = new mongoose.model('Post',new mongoose.Schema({
    title: {
        type: String,
        required: true,
        minlength: 5,
        maxlength: 20
    },
    body: String,
}));

router.get('/',async(req,res)=>{
    const posts = await Posts.find().sort('-title');
    res.send(posts);
});

router.post('/',async (req,res)=>{
    let post = new Posts({
        title: req.body.title,
        body: req.body.body
    });
    post = await post.save();
    res.send(post);
});

router.put('/:id',async (req,res)=>{
    let post = await Posts.findByIdAndUpdate(req.params.id,{
        title: req.body.title,
        body: req.body.body
    },{ 
        new: true
    });
    if(!post) return res.status(404).send("The post with the given ID not found...");
    res.send(post);
});

module.exports = router;