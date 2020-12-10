console.log("Before");

getUser(1)
    .then(user  =>  getRepository(user.name))
    .then(repo  =>  console.log(repo))
    .catch(err  =>  console.log("Error : ",err.message));
    
console.log("After");

function getUser(id){
    return new Promise((resolve,reject)=>{
        setTimeout(() => {
            console.log("Reading User From Databases...");
            resolve({id:id,name:'Depo'});
        }, 2000);
    });
};

function getRepository(name){
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            console.log("Repository...");
            resolve({name:name,repo:['repo1','repo2']});
        }, 2000);
    });
}