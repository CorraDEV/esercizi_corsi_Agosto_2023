function sommaElementiArray(array){
    return array.reduce((acc, ele) => acc + ele, 0);
}

function stampaSommaElementiArray(array, sommaEle){
    console.log(sommaEle(array));
}

const vettoreNumeri = [1, 2, 3, 4, 5, 6];
stampaSommaElementiArray(vettoreNumeri, sommaElementiArray);