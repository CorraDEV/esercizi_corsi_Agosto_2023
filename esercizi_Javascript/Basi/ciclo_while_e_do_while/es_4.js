let numero = 564;
let conta_cifre = 0;
let resto;

if(numero === 0){
    conta_cifre = 1;
    console.log(conta_cifre);
}
else{
    while(numero !== 0){
        resto = numero % 10;
        numero -= resto;
        numero /= 10;     
        conta_cifre++;
    }
    console.log(conta_cifre);
}