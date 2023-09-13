class Punto{
    constructor(x,y){
        this.x = x;
        this.y = y;
    }
    distanzaPuntoOrigine(){
        return Math.sqrt(this.x * this.x + this.y * this.y);
    }
}

const punto = new Punto(4,6);
console.log(punto.distanzaPuntoOrigine());