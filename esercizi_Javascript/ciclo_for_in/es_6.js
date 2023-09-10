const persona = {
    nome: 'Gianni',
    cognome: 'Verdi',
    age: 29
};

for(let key in persona){
    if(typeof persona[key] === 'string')
        console.log(persona[key]);
}