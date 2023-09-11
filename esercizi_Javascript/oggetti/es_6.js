const persona = {
    nome: 'Giacomo',
    cognome: 'Mattiello',
    age: 29
};

for(let key in persona)
    console.log(key +': '+ persona[key]);