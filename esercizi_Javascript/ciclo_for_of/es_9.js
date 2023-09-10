const numbs = [1, 2, 3, 4, 5, 6];
let sum = 0;

for (let num of numbs)
    sum += num;

let avg = sum / numbs.length;

console.log(avg);