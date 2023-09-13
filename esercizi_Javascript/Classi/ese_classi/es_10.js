class Triangolo{
    constructor(base,altezza){
        this.base = base;
        this.altezza = altezza;
    }
    calcolaArea(){
        return this.base*this.altezza / 2;
    }
}

const triangolo = new Triangolo(3,7);
console.log(triangolo.calcolaArea());