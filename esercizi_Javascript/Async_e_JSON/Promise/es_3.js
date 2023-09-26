const p = new Promise((resolve, reject) => {
    setTimeout(() => {
        resolve('Chiamata 1 completata');                
      }, 1000);
}); 

p.then((result) => {
    console.log(result);    
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Chiamata 2 completata');                
          }, 1000);
    }); 
})
.then((result) => {
    console.log(result);
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Chiamata 3 completata');                
          }, 1000);
    }); 
})
.then((result) => {
    console.log(result);
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Chiamata 4 completata');                
          }, 1000);
    }); 
})
.catch((err) => {
    console.log(err);
});