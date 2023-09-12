class Prodotto{
    constructor(nome, prezzo){
        this.nome = nome;
        this.prezzo = prezzo;
    }
    scontaProdotto(){
        this.prezzo *= 0.9;
    }
}

const prodotto = new Prodotto("Pizza", 7);

console.log('prezzo senza sconto: '+prodotto.prezzo);

prodotto.scontaProdotto();

console.log('prezzo con sconto: '+prodotto.prezzo);