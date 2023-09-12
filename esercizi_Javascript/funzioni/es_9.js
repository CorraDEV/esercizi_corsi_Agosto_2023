function contaVocali(parola){
    let vocali = 0;
    parola = parola.toLowerCase();

    for(let i = 0; i < parola.length; i++){
        switch(parola[i]){        
            case "a":
            case "e":
            case "i":
            case "o":
            case "u":
                vocali++;
        }        
    }
    
    return vocali;
}

console.log(contaVocali("ciao"));