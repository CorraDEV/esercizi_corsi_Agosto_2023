let n = 10; 
let blank_spaces = n-1;

for(let i=0; i<n; i++){    
    
    out = '';

    for(let j=0; j<blank_spaces; j++)
        out += ' ';                    
        
    blank_spaces--;

    out += '*';

    if(i > 0){
        for(let k=0; k<i; k++)
            out += ' *';
    }        

    console.log(out);
}