//Solve This to use Async Await
getCustomter(1,customer=>{
    console.log("Customer : ",customer);
    if(customer.isGold){
        getTopMovies((movies)=>{
            console.log("Top Movies : ",movies);
            sendEmail(customer.email,movies,()=>{
                console.log("Email Send...");
            });
        });
    }
});

function getCustomter(id,callback){
    setTimeout(()=>{
        callback({id:1,isGold:1,name:"Depo"});
    },2000);
};

function getTopMovies(callback){
    setTimeout(()=>{
        callback(["BathMan","Avenger"]);
    },2000);
};

function sendEmail(email,moview,callback){
    setTimeout(()=>{
        callback(["BathMan","Avenger"]);
    },2000);
};