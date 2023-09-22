let count = 1;

const intervallo = setInterval(() =>{    
    console.log(count);

    if(count === 10) 
        clearInterval(intervallo);      

    count++;
},1000);