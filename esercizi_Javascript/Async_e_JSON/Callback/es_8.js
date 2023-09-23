function raddoppiaValoreElementi(array){
    return array.map(ele => ele*2);
}

function stampaArray(array, metodo){
    const nuovoArray = metodo(array);
    console.log(nuovoArray);
}

const vett = [1,2,3,4,5];
stampaArray(vett, raddoppiaValoreElementi);