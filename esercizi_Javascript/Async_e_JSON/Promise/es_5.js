const p1 = new Promise((resolve, reject) =>{
    resolve('success1');
});
const p2 = new Promise((resolve, reject) =>{
    resolve('success2');
});
const p3 = new Promise((resolve, reject) =>{
    resolve('success3');
});

Promise.all([p1, p2, p3])
.then((res) =>{
    console.log(res);
})
.catch((err) =>{
    console.log(err);
})