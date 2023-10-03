const fs = require('fs');

const obj = {
    nome: 'Giovanni',
    cognome: 'Storti',
    età: 66
};

const json = JSON.stringify(obj);

fs.writeFile('giovanni.json', json, 'utf8', err => {
    if(err)
        console.error('Errore nella scrittura del file:', err);
    else
        console.log('Oggetto JSON scritto nel file con successo.');
});