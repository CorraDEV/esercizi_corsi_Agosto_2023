const giocatore = {
    nome: 'Player01',
    speed: 96,
    strength: 80,
    agility: 80            
};

let prodotto = 1;

for(let key in giocatore){
    if(typeof giocatore[key] === 'number')
        prodotto *= giocatore[key];
}

console.log(prodotto);