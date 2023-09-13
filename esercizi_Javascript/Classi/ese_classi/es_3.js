class Cerchio{
    constructor(raggio){
        this.raggio = raggio;       
    }
    calcolaArea(){
        return this.raggio * this.raggio * Math.PI;
    }
}

const cerchio = new Cerchio(3);
console.log(cerchio.calcolaArea().toFixed(2));