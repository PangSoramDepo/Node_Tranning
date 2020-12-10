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


async function createCourse(){
    const course = new Course({
        name : "Security",
        author: "Depo",
        tags : ['node','backend'],
        isPublished: true
    });
    const result = await course.save();
    console.log(result);
}

async function getCourse(){
    var colName="depo";

    // select name,author from courses where author like %depo% limit 2 order by name
    const result = await Course.find({author:{ $regex: '.*' + colName + '.*' , $options: 'i'}}).limit(2).sort({name:1}).select({name:1,author:1});
    
    /*
        --------Comparation Operator--------
        eq
        ne
        gt
        gte
        lt
        lte
        in
        nin
    */

    //select * from courses where price in (10,20,30)
    const result = await Course.find({price: { $in: [10,20,30]}});

    //select * from courses where price > 10 and price <= 50
    const result = await Course.find({price: { $gt: 10, $lte: 50}});

    /*
        --------Logical Operator--------
        or
        and
    */

    //select * from courses where (author = "Depo" or isPublished = true) and name = "Security"
    const result = await Course.find().or([{author:"Depo"},{isPublished:true}]).and([{name:"Security"}]);

    /*
        --------Regular Expression--------
    */

    //Start with Depo
    const result = await Course.find({author:/^Depo/});

    //End with Depo and case insensitive
    const result = await Course.find({author:/Depo$/i});

    //Contain Depo
    const result = await Course.find({author:/.*Depo.*/});

    /*
        --------Count--------
    */
    const result = await Course.find({author:/.*Depo.*/}).count();

    /*
        --------Pagination--------
    */
    const result = await Course.find().skip((pageNumber-1)*pageSize).limit(pageSize);

    const result = await Course.find({ isPublished:true, price: {$gte:15} }).or([{name:/.*by.*/}]);

    console.log(result);
}

// createCourse();
getCourse();