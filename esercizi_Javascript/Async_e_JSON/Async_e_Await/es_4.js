async function ritornaValore() {        
    return new Promise(resolve => 
        resolve('promise risolta')
    );        
}

async function stampaRisultato(){
    const res = await ritornaValore();
    console.log(res);
}

stampaRisultato();