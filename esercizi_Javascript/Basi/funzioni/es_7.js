function sommaElementi(array) {
    return array.reduce((sum, ele) => sum + ele);
}

console.log(sommaElementi([1, 2, 3, 4]));