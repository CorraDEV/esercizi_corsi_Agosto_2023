class Veicolo {
    avviaMotore(){
        console.log("avvia motore");
    }
}

class Motocicletta extends Veicolo {    
    guida(){
        console.log("guida motocicletta");
    }
}

const moto = new Motocicletta();
moto.avviaMotore();
moto.guida();