function esitoPositivo(){
    console.log("Esito positivo");
}

function esitoNegativo(){
    console.log("Esito negativo");
}

function esito(esitoPos, esitoNeg) {
    let valore = Math.random();

    if(valore < 0.5)
        esitoNeg();
    else
        esitoPos();
}

esito(esitoPositivo, esitoNegativo);