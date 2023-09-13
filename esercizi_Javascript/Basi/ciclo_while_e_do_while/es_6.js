let num = 12463;
let conta_pari = 0;
let resto;

do{    
    resto = num % 10; 

    if(resto % 2 == 0)
        conta_pari++;
    
    num -= resto;
    num /= 10;
}while(num != 0);

console.log(conta_pari);