const giocatore1 = {
    nome: 'Player01',
    speed: 96,
    strength: 80,
    agility: 80            
};

const giocatore2 = {
    nome: 'Player02',
    speed: 96,
    strength: 85,
    agility: 62            
};

for(let key in giocatore1){
    if(giocatore1[key] === giocatore2[key])
        console.log(`entrambi i giocatori hanno lo stesso valore nel parametro "${key}"`);
}