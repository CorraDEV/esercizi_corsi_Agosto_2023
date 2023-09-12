function generaNumeroCasuale(max, min){
    return Math.floor(Math.random() * (max - min + 1) + min);
}

console.log(generaNumeroCasuale(7, 3));