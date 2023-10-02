async function ritornaPromise() {        
    return new Promise(reject => reject('promise fallita'));
}

async function stampaRisultato(){    
    const res = await ritornaPromise();
    console.log(res);        
}

stampaRisultato();