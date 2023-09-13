const persona1 = {
    age: 26,
    nome: 'Mario',
    cognome: 'Rossi'
};

const persona2 = {
    nome: 'Flavio',
    age: 24,
    coloreOcchi: 'marroni',
    cognome: 'Gialli',
    sportPreferito: 'calcio'
};

for(let key in persona1){
    if(persona2.hasOwnProperty(key)) 
        console.log(`proprietà ${key} presente in entrambi gli oggetti`);
}