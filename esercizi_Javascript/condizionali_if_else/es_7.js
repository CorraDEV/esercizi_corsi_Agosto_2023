let parola = 'tastiera';
let parolaInvertita = '';

for(let i = parola.length-1; i >= 0; i--)
    parolaInvertita += parola[i];

if(parola === parolaInvertita)
    console.log('palindroma');
else
    console.log('non palindroma');