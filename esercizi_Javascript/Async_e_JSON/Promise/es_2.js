const p = new Promise((resolve, reject) => {
    setTimeout(() =>{
        reject('error');
    }, 3000);    
});

p.catch((err) => {
    console.log(err);
});