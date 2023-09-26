const p1 = new Promise((resolve, reject) =>{
    setTimeout(() =>{
        resolve('success1');
    }, 1000);    
});
const p2 = new Promise((resolve, reject) =>{
    setTimeout(() =>{
        resolve('success2');
    }, 5000);
});

Promise.race([p1, p2])
.then(res => {
    console.log(res);
})
.catch(err => {
    console.log(err);
})