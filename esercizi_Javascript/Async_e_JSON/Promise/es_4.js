const p = new Promise((resolve, reject) =>{
    let num = Math.random() * 100 + 1;
    
    console.log('numero: '+ num);

    if(num <= 50)
        resolve('messaggio');
    else
        reject('errore');
});

p.then((response) =>{
    console.log(response);    
})
.catch((err) => console.log(err));