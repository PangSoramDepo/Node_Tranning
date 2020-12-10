// Async Await help you to write Asyncronous code like Syncronous code
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

async function DisplayLog(){
    try{
        // Resolve
        const users = await getUser(1);
        const repos = await getRepository(users.name);
    }catch(err){
        // Reject
        console.log("Error : ",err.message);
    }
}

console.log("Before");
DisplayLog();
console.log("After");