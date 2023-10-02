async function controllaValore(){
    try{
        const value = parseInt(Math.random()*10+1);
        const p = new Promise((resolve, reject) =>{
            if(value <= 5)
                resolve('valore inferiore a 5: '+value);
            else
                reject('valore superiore a 5');
        })
        
        let res = await p;
        console.log(res);
    }
    catch(e){
        console.log("Errore:", e);
    }
}

controllaValore();