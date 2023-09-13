let num = 17;
let divisore = num;
let n_divisori = 0;
do{
    if(num % divisore == 0)
        n_divisori++;
    
    divisore--;
}while(n_divisori < 3);

if(n_divisori == 2)
    console.log(num + " è un numero primo");
else
    console.log(num + " non è un numero primo");