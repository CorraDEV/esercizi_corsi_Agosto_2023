let a = 1;
let b = 10;
let c = 10;

switch(true){    
    case (a == b && b == c):
        console.log('triangolo equilatero');
        break;
    case (a == b || a == c || b == c):
        console.log('triangolo isoscele');
        break;
    default:
        console.log('triangolo scaleno');
}