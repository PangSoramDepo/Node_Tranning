// CallBack function is the function that going to be call when asynchronous ready
console.log("Before");
getUser(1,function(user){
    console.log(`This User ID: ${user.id} and name : ${user.name}`);
    getRepository(user.name,function(repo){
        console.log(`Repo Has ${repo.repo}`);
    });
});
console.log("After");

function getUser(id,callback){
    setTimeout(() => {
        console.log("Reading User From Databases...");
        callback({id:id,name:'Depo'});
    }, 2000);
};

function getRepository(name,callback){
    setTimeout(()=>{
        console.log("Repository...");
        callback({name:name,repo:['repo1','repo2']});
    }, 2000);
}