//Promise That always resolve
const p =Promise.resolve({id:1});
p.then(result   =>  console.log(result));