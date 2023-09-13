class Forma{    
    calcolaArea(){
        return 0;
    }
}

class Cerchio extends Forma{
    constructor(raggio){
        super();
        this.raggio = raggio;        
    }
    calcolaArea(){
        return this.raggio * this.raggio * Math.PI;
    }
}

const cerchio = new Cerchio(2);

console.log(cerchio.calcolaArea().toFixed(2));