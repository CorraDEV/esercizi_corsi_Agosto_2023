function callBackFunc(obj, func){
    return func(obj);
}

function sommaNumeriVettore(vector){
    let somma = 0;
    
    for(let i = 0; i < vector.length; i++)
        somma += vector[i];
        
    return somma;    
}

console.log(callBackFunc([2, 4, 7, 3], sommaNumeriVettore));