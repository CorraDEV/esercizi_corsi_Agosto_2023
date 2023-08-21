function test(numeri){
    for(let i = 0; i < numeri.length; i++){
        if(numeri[i] === 5){
            console.log('Cinque trovato!');
            break;
        } 
        else if(numeri[i] === 3)
            continue;
        else
            console.log(numeri[i]);
    }
}

test([1, 3, 4, 8, 5, 12]);