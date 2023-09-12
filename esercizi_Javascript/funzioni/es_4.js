function calcolaFattoriale(n){
    let fattoriale = 1;
    
    for(let i = 1; i <= n; i++)
        fattoriale *= i;

    return fattoriale;
}

console.log(calcolaFattoriale(5));