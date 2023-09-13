class Veicolo{
    constructor(marca, annoDiProduzione){
        this.marca = marca;        
        this.annoDiProduzione = annoDiProduzione;
    }
}

class Automobile extends Veicolo{
    constructor(marca, annoDiProduzione, modello){
        super(marca, annoDiProduzione);
        this.modello = modello;
    }
}

const macchina = new Automobile('macchina', 1983, 'mac123');

console.log(macchina.marca, macchina.annoDiProduzione, macchina.modello);