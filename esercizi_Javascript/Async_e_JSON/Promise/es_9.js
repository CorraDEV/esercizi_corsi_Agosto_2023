const p1 = new Promise((resolve, reject) =>{
    resolve('success1');
});
const p2 = new Promise((resolve, reject) =>{
    resolve('success2');
});

p1
.then((res) =>{
    console.log(res);
    return p2;
})
.then((res) =>{
    console.log(res);
})
.catch((err) =>{
    console.log(err);
});