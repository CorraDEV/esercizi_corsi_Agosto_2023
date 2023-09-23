let count = 5;

const intervallo = setInterval(() =>{    
    console.log(count);

    if(count === 0) 
        clearInterval(intervallo);      

    count--;
},1000);