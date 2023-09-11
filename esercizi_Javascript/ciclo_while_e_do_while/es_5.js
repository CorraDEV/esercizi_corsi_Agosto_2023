let n1 = 1;
let n2 = 1;
let res = 0;

console.log(n1);
console.log(n2);

do{               
    res = n1 + n2;
    console.log(res);
    n1 = n2;
    n2 = res;        
}while(res <= 100);