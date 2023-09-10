let numbers = [1, 5, 3, 2, 4];
let max = numbers[0];

for(let ele of numbers) {
    if(ele > max)
        max = ele;    
}

console.log(max);