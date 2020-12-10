const mongoose = require('mongoose');

mongoose.connect('mongodb://localhost/node',{ useNewUrlParser:true, useUnifiedTopology:true })
    .then(()=>console.log("Connect"))
    .catch((err)=>console.log("Connect Fail : ",err.message));


const courseSchema = mongoose.Schema({
    name: { 
        type: String,
        required:true,
        minlength: 5,
        maxlength: 255
        // match: /partern/
    },
    category: {
        type: String,
        enum: ['web','mobile','network']
    },
    author: String,
    tags: {
        type: Array,
        validate: {
            isAsync: true,
            validator: function(v,callback){
                setTimeout(() => {
                    const result = v && v.length > 0;
                    callback(result);
                }, 3000);
            },
            message: 'A Couse should have at least one tag'
        }
        // validate: {
        //     validator: function(v){
        //         // if v not null( have value ) and v length > 0
        //         return v && v.length > 0;
        //     },
        //     message: 'A Couse should have at least one tag'
        // }
    },
    date: {type:Date,default:Date.now},
    isPublished: Boolean,
    price: {
        type: Number,
        //in this case can not use arrow function becuase in this function we need to use "this" keyword, so arrow function will think current object in their function
        required: function(){return this.isPublished},
        min: 5,
        max: 10
    }
});

const Course = mongoose.model('Course',courseSchema);

async function createCourse(){
    const course = new Course({
        category: '-',
        tags: ['backend','full stack'],
        isPublished: true
    });

    try {
        const result = await course.save();
        console.log("Course : ",course);
    } catch (error) {
        console.log("Create Fail : ",error.message);
    }
}

createCourse();