function somma(num1, num2){
    return num1 + num2;
}

function differenza(num1, num2){
    return num1 - num2;
}

function prodotto(num1, num2){
    return num1 * num2;
}

function divisione(num1, num2){
    return num1 / num2;
}

function operazione(num1, num2, operazioneFunc){
    return operazioneFunc(num1, num2);
}

const res = operazione(10, 20, somma);
console.log(res);