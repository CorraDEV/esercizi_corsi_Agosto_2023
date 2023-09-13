class Automobile{
    constructor(marca, annoProduzione){
        this.marca = marca;
        this.annoProduzione = annoProduzione;        
    }
    dettagli(){
        console.log(this.marca, this.annoProduzione);
    }
}

const automobile1 = new Automobile("BMW", 2019);

automobile1.dettagli();