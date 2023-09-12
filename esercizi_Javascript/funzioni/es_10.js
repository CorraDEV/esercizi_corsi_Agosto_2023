function calcolaMedia(array){
    let somma = array.reduce((sum, ele) => sum + ele, 0);
    return somma / array.length;
}

console.log(calcolaMedia([4, 7, 2]));  