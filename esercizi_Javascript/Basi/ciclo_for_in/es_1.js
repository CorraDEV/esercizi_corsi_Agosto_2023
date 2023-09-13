const persona = {
    nome: 'Luis',
    cognome: 'Martinez',
    age: 25
};

for(let key in persona) 
    console.log(`${key}: ${persona[key]}`);