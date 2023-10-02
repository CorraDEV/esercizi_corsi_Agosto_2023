async function ottieniDati(){
    return new Promise((resolve) => {
        setTimeout(() =>{
            const dati = {
                nome: 'Gicomo',
                cognome: 'Ranieri',
                età: 29
            };
            resolve(dati);
        }, 2000);
    })
}

async function stampaDati(){
    const dati = await ottieniDati();
    console.log(dati);
}

stampaDati();