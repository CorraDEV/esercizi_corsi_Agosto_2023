const fs = require('fs');

async function leggiFile() {
    try {
        const dati = await fs.promises.readFile('utente.txt', 'utf-8');
        console.log('informazioni utente:\n'+dati);
    } 
    catch (errore) {        
        console.error('errore durante lettura file:', errore);
    }
}

leggiFile();