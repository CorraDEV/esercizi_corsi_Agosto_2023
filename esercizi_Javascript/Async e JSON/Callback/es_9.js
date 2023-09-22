function trasformaInMaiuscolo(parola){
    return parola.map(ele => ele.toUpperCase());
}

function stampaParolaInMaiuscolo(parola, metodo){
    const parolaInMaiuscolo = metodo(parola);
    console.log(parolaInMaiuscolo);
}

const parola = 'Albero';
const parolaVettore = parola.split('');
stampaParolaInMaiuscolo(parolaVettore, trasformaInMaiuscolo);