const vector = [3, 5, 6, 7];

let sum = 0;
let avg;

for(let i = 0; i < vector.length; i++)
    sum += vector[i];

avg = sum / vector.length;

console.log(avg);