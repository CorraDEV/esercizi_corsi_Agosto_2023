async function ritornaValoreCasuale() {        
    return new Promise(resolve => 
        setTimeout(() =>{
            resolve(parseInt(Math.random()*10+1));
        }, 2000)        
    );        
}

async function stampaRisultato(){
    const risultato = await ritornaValoreCasuale();
    console.log(risultato);
}

stampaRisultato();