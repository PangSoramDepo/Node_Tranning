const mongoose = require('mongoose');

mongoose.connect('mongodb://localhost/node', { useNewUrlParser: true ,useUnifiedTopology: true })
    .then(()=>console.log("Connect..."))
    .catch(err => console.log("Error : ",err));

const courseSchema = new mongoose.Schema({
    name: String,
    author: String,
    tags: [String],
    date: {type:Date,default:Date.now},
    isPublished: Boolean
});

const Course = mongoose.model('Course',courseSchema);

async function delteCourse(id){
    // .deleteOne,.deleteMany
    const course = await Course.findByIdAndRemove(id);

    console.log("Course : ",course);
}

delteCourse('5fd0f5d9519a5f2f50b4158d');