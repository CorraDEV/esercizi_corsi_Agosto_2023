class Veicolo{
    accelera(){
        console.log("accelera");
    }
}

class Automobile extends Veicolo{
    suonaClacson(){
        console.log("suona clacson");
    }
    accelera(){
        console.log("accelera automobile");
    }
}

const automobile = new Automobile();
const veicolo = new Veicolo();

veicolo.accelera();
automobile.accelera();
automobile.suonaClacson();