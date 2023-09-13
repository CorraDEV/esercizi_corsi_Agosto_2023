const stringa = 'Buongiorno';
let num_vocali = 0;

for(let ele of stringa){
    switch(ele.toLowerCase){
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            num_vocali++;            
    }    
}

console.log(num_vocali);