const giocatore = {
    nome: 'Player01',
    speed: 96,
    strength: 80,
    agility: 80            
};

let sum = 0;

for(let key in giocatore){
    if(typeof giocatore[key] === 'number')
        sum += giocatore[key];
}

console.log(sum);