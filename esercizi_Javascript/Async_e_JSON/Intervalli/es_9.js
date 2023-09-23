let secondi = 0;
let minuti = 0;

let minutiCopy = 0;
let secondiCopy = 0;

setInterval(() => {
    secondi++;
    
    if(secondi == 60){
        minuti++;
        secondi = 0;
    }
    
    if(minuti == 60)
        minuti = 0;
    
    if(minuti < 10)
        minutiCopy = '0' + minuti;
    else
        minutiCopy = minuti;
    
    if(secondi < 10)
        secondiCopy = '0' + secondi;
    else
        secondiCopy = secondi;

    console.log(minutiCopy+':'+secondiCopy);
}, 1000);