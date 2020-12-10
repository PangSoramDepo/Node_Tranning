// Solution For exercise 16
async function answer(){
    const customer = await getCustomter(1);
    if(customer.isGold){
        const topMovies = await getTopMovies();
        sendEmail(customer.name,topMovies);
    }
}

answer();

function getCustomter(id){
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            let customer = {id:1,isGold:true,name:"Depo"};
            console.log("Customer : ",customer);
            resolve(customer);
        },2000);
    });
};

function getTopMovies(){
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            let movies = ["BathMan","Avenger"];
            console.log("Top Movies : ",movies);
            resolve(movies);
        },2000);
    });
};

function sendEmail(email,moview){
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            console.log("Email Send...");
        },2000);
    });
};