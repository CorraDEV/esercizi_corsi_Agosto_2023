function ritornaOggetto(array){
    let max = Math.max(...array);
    let min = Math.min(...array);
    return {massimo: max, minimo: min};
}

console.log(ritornaOggetto([7,23,9,14,3,11,19]));