class Animale{
    constructor(nome){
        this.nome = nome;
    }
    verso(){
        console.log('verso animale generico');
    }
}

class Cane extends Animale{
    constructor(nome, razza){
        super(nome);
        this.razza = razza;
    }
    verso(){
        console.log('verso cane');
    }
}

const cane = new Cane('Garko', 'Golden Retriever');
console.log(cane.nome, cane.razza);
cane.verso();