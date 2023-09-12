class Rettangolo{
    constructor(base,altezza){
        this.base = base;
        this.altezza = altezza;
    }
    calcolaArea(){
        return this.base*this.altezza;
    }
}

const rettangolo = new Rettangolo(5,10);
console.log(rettangolo.calcolaArea());