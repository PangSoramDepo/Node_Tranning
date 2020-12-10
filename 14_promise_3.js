// Parallel Promise
const p1=new Promise((resolve)=>{
    setTimeout(()=>{
        console.log("Async Operation 1...");
        resolve(1);
    },2000);
});

const p2=new Promise((resolve)=>{
    setTimeout(()=>{
        console.log("Async Operation 2...");
        resolve(2);
    },2000);
});

//This will return (execute) when all the promise is finish, in this case p1 start and p2 start inmidately without wait p1 finish and than execute p2
Promise.all([p1,p2])
.then(result => console.log(result));

//This will return (execute) when one of the promise array is finish or resolve
Promise.race([p1,p2])
.then(result => console.log(result));