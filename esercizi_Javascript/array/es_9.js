const nomi = ['Antonio', 'Alessandro', 'Andrea'];

let sum = 0;

for(let nome of nomi)
    sum += nome.length;

let avg = sum / nomi.length;

console.log(avg);