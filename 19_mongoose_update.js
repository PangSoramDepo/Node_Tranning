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

//Approach Query first and update
async function updateCourse1(id){
    const course = await Course.findById(id);
    if(!course) return;
    
    course.name = "Node Js";
    course.isPublished = false;  

    const result = await course.save();

    console.log("Update : ",result);
}

//Approach Update Direct 
async function updateCourse2(id){

    // Update without return object
    const course = await Course.update({_id:id},{isPublished:false,name:'C#'});

    //Update return origin object before update
    const course = await Course.findByIdAndUpdate(id,{
        $set:{
            author: 'PoPo',
            isPublished: true
        }
    });

    //Update return origin object after update
    const course = await Course.findByIdAndUpdate(id,{
        $set:{
            author: 'PoPo',
            isPublished: true
        }
    },{new:true});

    console.log("Update : ",course);
}

updateCourse2('5fd0f5d9519a5f2f50b4158d');