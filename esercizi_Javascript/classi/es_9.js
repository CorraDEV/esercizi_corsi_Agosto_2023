class Utente{
    constructor(nome, cognome){
        this.nome = nome;
        this.cognome = cognome;
    }
    generaEmail(){
        return this.nome.toLowerCase() + '.' + this.cognome.toLowerCase() + '@gmail.com';
    }
}

const utente = new Utente('Giuseppe', 'Rossi');

console.log(utente.generaEmail());