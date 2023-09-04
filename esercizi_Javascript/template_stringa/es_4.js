const nazioni = ['Italia', 'Spagna', 'Francia', 'Germania'];
let lista = '<ul>';

for(let i = 0; i < nazioni.length; i++)
    lista += `<li>${nazioni[i]}</li>`;

lista += '</ul>';
console.log(lista);