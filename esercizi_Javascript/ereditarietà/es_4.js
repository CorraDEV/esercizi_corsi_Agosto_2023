class Forma{    
    calcolaArea(){
        return 0;
    }
}

class Rettangolo extends Forma{
    constructor(base, altezza){
        super();
        this.base = base;
        this.altezza = altezza;
    }
    calcolaArea(){
        return this.base * this.altezza;
    }
}

const rett = new Rettangolo(10, 10);

console.log(rett.calcolaArea());